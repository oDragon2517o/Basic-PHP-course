<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
}else {
    header("Location:index.php?controller=index");
    die;
}

$guest = [];

require_once "view/guest.php";

