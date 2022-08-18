<?php
include "bd.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Введите задачу и id пользователя</h1>
    <form action="index.php" method="POST">
        <input name="text" />
        <input name="userId" value="1" />
        <input type="submit" value="Отправить" />
    </form>

    <h1>Введите id пользователя</h1>
    <form action="index.php" method="POST">
        <input name="userId" value="1" />
        <input type="submit" value="Отправить" />
    </form>
    <?php
    if (isset($result)) {
        echo "<table>";
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["task"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } ?>
</body>

</html>