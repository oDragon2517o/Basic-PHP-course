<?php

do {
    $n = (int)readline("Сколько запланировано задч? ");
} while ($n <= 0);

// $task = readline("Какая задача стоит перед вами сегодня? ");
// $time = readline("Сколько примерно времени эта задача займет? ");

$summTime = 0;

$zadachi = "";

for ($i = 1; $i <= $n; $i++) {
    $task = readline("Какая задача стоит перед вами сегодня? ");
    $time = readline("Сколько примерно времени эта задача займет? ");
    $summTime += $time;
    $zadachi .= "-$task ({$time}ч)\n";
}

echo "У вас запланировано $n задач. Из них: \n";
echo $zadachi;
echo "Это займет времении: {$summTime}ч";
