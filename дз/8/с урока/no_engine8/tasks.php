<?php

$pdo = require_once "db.php";

include_once "auth.php";



if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    die();
}

$user_id = $_SESSION['id'];

if (isset($_POST['text']) && isset($_GET['action']) && $_GET['action'] == 'addtask') {
    $taskText = $_POST['text'];

    $statement = $pdo->prepare(
        'INSERT INTO tasks (id_user, text) VALUES (:user_id, :text)'
    );
    $statement->execute([
        'user_id' => $user_id,
        'text' => $taskText
    ]);


   // $_SESSION['products'][] = $product;
    header('Location: tasks.php');
    die();
}

if (isset($_GET['action']) && $_GET['action'] == 'done') {
    $key = $_GET['key'];

    unset( $_SESSION['products'][$key]);
    header('Location: tasks.php');
    die();
}

$statement = $pdo->prepare(
    'SELECT * FROM tasks WHERE id_user = :id_user'
);
$statement->execute([
    'id_user' => $user_id
]);

$tasks = $statement->fetchAll();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Страница 2</h1>
<?php include "menu.php" ?>
<?php if (is_null($name)): ?>
    <form method="post">
        <input type="text" name="login">
        <input type="password" name="pass">
        <input type="submit" value="login">
    </form>
<?php else: ?>
    Добро пожаловать <?= $name ?> <a href="/?action=logout">[exit]</a><br>
<?php endif; ?>


<h2>Список задач</h2>
<form action="tasks.php?action=addtask" method="post">
    <input type="text" name="text" placeholder="Добавьте задачу">
    <input type="submit" value="Добавить">
</form>
<br>
<?php if (!empty($tasks)): ?>
    <?php foreach ($tasks as $key => $task): ?>
        * <?=$task['text']?> <a href="?action=done&key=<?=$task['id']?>">[X]</a> <br>
    <?php endforeach; ?>
<?php else: ?>
    Нет задач
<?php endif; ?>

</body>
</html>