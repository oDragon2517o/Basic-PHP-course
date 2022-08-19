<?php
// fixture.php
$pdo = new PDO('sqlite:database.db');

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name  VARCHAR(150) UNIQUE NOT NULL,
  Login VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(100) NOT NULL)');
