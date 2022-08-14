<?php

session_start();

$tasks = [
    'Погулять с собакой',
    'Починить компьютер'
];


print_r($_SESSION);

if (isset($_POST['text'])) {
    $product = strip_tags($_POST['text']);
    $_SESSION['products'][] = $product;
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $key = $_GET['key'];

    unset( $_SESSION['products'][$key]);
    // header('Location: second.php');
    
}


include "view/tasks.php";