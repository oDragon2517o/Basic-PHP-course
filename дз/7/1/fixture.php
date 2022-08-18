<?php
// fixture.php
$pdo = new PDO('sqlite:database.db');

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');


$pdo->exec('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    usesrId INTEGER NOT NULL,
    task VARCHAR(100) NOT NULL
 )');
