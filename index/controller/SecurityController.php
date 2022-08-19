<?php

require_once 'model/User.php';
// require_once 'model/UserProvider.php';
$pdo = require 'db.php'; // Подключим PDO

session_start();


if (isset($_POST['username'], $_POST['password'])) {

    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo); // Передаем аргумент
    $user = $userProvider->getByUsernameAndPassword($username, $password);
}



include "view/signin.php";
