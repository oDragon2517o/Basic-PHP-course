<?php


// print_r($_POST);


if (isset($_POST['text']) && $_POST['userId']) {
    $userId = strip_tags($_POST['userId']);
    $text = strip_tags($_POST['text']);


    $pdo = new PDO('sqlite:database.db');
    $sql = "INSERT INTO tasks (usesrId,task) VALUES($userId,'$text')";
    $aaa = $pdo->exec($sql);
    var_dump($aaa);
    echo "Добавлено";
    unset($_POST);
    header("Location: index.php");
    die();
}

if (isset($_POST['text']) == false  && isset($_POST['userId'])) {
    $userId = strip_tags($_POST['userId']);
    $pdo = new PDO('sqlite:database.db');
    $sql = "SELECT*FROM tasks WHERE usesrId  IN ($userId)";
    $result = $pdo->query($sql);
    // $row = $result->fetch();
    // print_r($row);
    // echo "$result";
    unset($_POST);
}
