<?php

include_once "auth.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Страница 1</h1>
<?php include "menu.php" ?>
<?php if (is_null($name)): ?>
    <form method="post">
        <input type="text" name="login">
        <input type="password" name="pass">
        <input type="submit" value="login">
    </form>
<?php else: ?>
    Добро пожаловать <?= $name ?> <a href="/?action=logout">[exit]</a>
<?php endif; ?>
</body>
</html>