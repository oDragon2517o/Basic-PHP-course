<?php

do {
    $n = (int)readline("Сколько запланировано задчь? " . \PHP_EOL);
} while (!$n);

// $task = readline("Какая задача стоит перед вами сегодня? ");
// $time = readline("Сколько примерно времени эта задача займет? ");



for ($i = 1; $i <= $n; $i++) {
    $task = readline("Какая задача стоит перед вами сегодня? ");
    $time = readline("Сколько примерно времени эта задача займет? ");
$summTime +=$time;
    $zadachi .= "-$task ({$time}ч)\n";
}


echo $zadachi;