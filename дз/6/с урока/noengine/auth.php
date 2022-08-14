<?php
session_start();
$name = null;
if (isset($_POST['login'])) {
    $login = htmlspecialchars(strip_tags($_POST['login']));
    $pass = htmlspecialchars(strip_tags($_POST['pass']));

    if ($login == 'admin' && $pass == 123) {
        $_SESSION['login'] = $login;
        $name = $login;
        header("Location: second.php");
        die();
    }

   // setcookie("login", $name, time() + 3600);

}

if (isset($_SESSION['login'])) {
    $name = $_SESSION['login'];
}

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
   // setcookie("login", $name, time() - 3600);
    unset($_SESSION['login']);
    session_destroy();
    $name = null;
}