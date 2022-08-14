<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

$error = null;

// разлогиниться
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    //setcookie('username', null, -1, '/');
    unset($_SESSION['username']);
    // unset($_COOKIE['username']);
    header("Location: index.php?controller=index");
    die();

}


if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);
    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die();
    }
}//погулять с собакой [done]

include "view/signin.php";