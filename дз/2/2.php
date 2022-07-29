<?php

// Список вопросов
$answer1 = 2005;
$answer2 = 2020;
$answer3 = 2023;


do {
    echo ("Год выхода PS5? " . PHP_EOL .
        $answer1 . PHP_EOL .
        $answer2 . PHP_EOL .
        $answer3 . PHP_EOL);

    $data = (int)readline();

    if ($data == $answer1 || $data == $answer2 || $data == $answer3) {
        $chec = false;
    } else {
        $chec = true;
    }

    if ($data !== 2020 && $chec == false) {
        echo ("Ответ не верный");
        break;
    }
    if ($data == 2020) {
        echo ("Поздравляю!!!");
        break;
    }
} while ($chec);
