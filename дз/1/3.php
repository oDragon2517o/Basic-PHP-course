<?php

function task()
{
    $task = readline("Какие планы? ");
    $time = readline("Сколько времени это займет? ");

    return [$task, $time];
}


$name = readline("Какое у тебя имя? ");

$task1 = task();
$task2 = task();
$task3 = task();

$sumTime = $task1[1] + $task2[1] + $task3[1];

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1[0] ({$task1[1]}ч)
- $task2[0] ({$task2[1]}ч)
- $task3[0] ({$task3[1]}ч)
Примерное время выполнения плана = {$sumTime}ч";
