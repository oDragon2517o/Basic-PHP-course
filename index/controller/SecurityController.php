<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require 'db.php'; // Подключим PDO

session_start();


// Выйти из аккаунта
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: index.php");
    die();
}


// Авторизация
if (isset($_POST['login'], $_POST['password'])) {

    ['login' => $login, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo); // Передаем аргумент
    $user = $userProvider->getByUsernameAndPassword($login, $password);

    if ($user == null) {
        var_dump($user);
    } else {
        $_SESSION['login'] = $user;
        $_SESSION['id'] = $user->getId();
        header("Location: index.php");
        die();
    }
}

// session_destroy();

include "view/signin.php";
