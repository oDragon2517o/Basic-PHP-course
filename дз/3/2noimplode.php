<?php

do {
    $name = readline("Введиите имя именниника:  ");
} while (!$name);

$mass1 = [
    "счастья",
    "здоровья",
    "успеха",
    "богатство",
    "добра",
];
$mass2 = [
    "бесконечного",
    "крепкого",
    "надежного",
    "сильного",
    "наиважнейщего",
];

echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю {$mass2[array_rand($mass2, 1)]} {$mass1[array_rand($mass1, 1)]}, {$mass2[array_rand($mass2, 1)]} {$mass1[array_rand($mass1, 1)]} и {$mass2[array_rand($mass2, 1)]} {$mass1[array_rand($mass1, 1)]}";
