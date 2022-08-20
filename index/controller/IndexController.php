<?php
require_once 'model/User.php';
session_start();

// print_r($_SESSION);
// var_dump($_SESSION);
$login = null;
if (isset($_SESSION['login'])) {
    // print_r($_SESSION['login']);
    $login = $_SESSION['login']->getLogin();
}

include "view/index.php";
