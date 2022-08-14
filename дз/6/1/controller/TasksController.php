<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
session_start();


$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
}else{
    header("Location: index.php?controller=index");
    die();
}






if (isset($_POST['text']) && $_GET['action'] === 'add') {
    $product = strip_tags($_POST['text']);
    $_SESSION['products'][] = $product;
    header("Location: index.php?controller=tasks");
    die();
}


if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $key = $_GET['key'];

    unset( $_SESSION['products'][$key]);
    // header('Location: second.php');
    header("Location: index.php?controller=tasks");
    die();
    
}

print_r($_SESSION);


include "view/tasks.php";