<?php

include "model/User.php";
include "model/UserProvider.php";


$pdo = new PDO('sqlite:database.db');

$userProvider = new UserProvider($pdo);

var_dump($userProvider->getByUsernameAndPassword('admin', '123'));
