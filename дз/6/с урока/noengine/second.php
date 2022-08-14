<?php

include_once "auth.php";

if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    die();
}

if (isset($_POST['text'])) {
    $product = strip_tags($_POST['text']);
    $_SESSION['products'][] = $product;
    header('Location: second.php');
    die();
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $key = $_GET['key'];

    unset( $_SESSION['products'][$key]);
    header('Location: second.php');
    die();
}
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


<h2>Список покупок</h2>
<form method="post">
    <input type="text" name="text" placeholder="Добавьте покупку">
    <input type="submit" value="Добавить">
</form>
<br>
<?php if (isset($_SESSION['products'])): ?>
    <?php foreach ($_SESSION['products'] as $key => $product): ?>
        * <?=$product?> <a href="?action=delete&key=<?=$key?>">[X]</a> <br>
    <?php endforeach; ?>
<?php else: ?>
    Нет товаров
<?php endif; ?>

</body>
</html>