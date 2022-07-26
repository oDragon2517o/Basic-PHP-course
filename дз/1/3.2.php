<?php

$name = "Какое у тебя имя? ";
$task = "Какая задача стоит перед вами сегодня? ";
$time = "Сколько примерно времени эта задача займет? ";

$name = readline($name);

$task1 = readline($task);
$$task1 = readline($time);

$task2 = readline($task);
$$task2 = readline($time);

$task3 = readline($task);
$$task3 = readline($time);

$sumTime = $$task1 + $$task2 + $$task3;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ({$$task1}ч)
- $task2 ({$$task2}ч)
- $task3 ({$$task3}ч)
Примерное время выполнения плана = {$sumTime}ч";
