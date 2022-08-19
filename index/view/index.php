<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum animi suscipit dolorum iusto odio deserunt, nam quos id non iure hic temporibus quo sapiente nisi sit dolor nemo reiciendis a!

    <?php if (is_null($username)) : ?>
        <a href="/?controller=security">Войти</a>
    <?php else : ?>
        <?= $username ?> <a href="/?controller=security&action=logout">Выйти</a>
        <a href="/?controller=tasks">Задачи</a>

    <?php endif; ?>
</body>

</html>