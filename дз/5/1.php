<?php

include_once "Task.php";
include_once "User.php";




$user = new User();
$task = new Task($user);

var_dump($task);

