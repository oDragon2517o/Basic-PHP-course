<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <h3>Авторизация</h3>

        <label for="username">Имя пользователя</label>
        <input type="text" id="username" name="username" placeholder="Имя пользователя" required="" autofocus="">
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" placeholder="Пароль" required="">
        <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Войти</button>
        <div>
            <a href="/">Назад</a>
        </div>
    </form>
</body>

</html>