<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require 'db.php'; // Подключим PDO

session_start();

//Проверка авторизации
$login = null;
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login']->getlogin();
} else {
    header("Location: index.php?controller=index");
    die();
}

print_r($_SESSION);

include "view/tasks.php";
