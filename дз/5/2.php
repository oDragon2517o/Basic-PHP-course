<?php

include_once "Task.php";
include_once "User.php";
include_once "TaskService.php";
include_once "Comment.php";


$user = new User("Бзер1");
$task = new Task($user);


TaskService::addComment($user,$task,"Первый коммент");
TaskService::addComment($user,$task,"Второй коммент");

foreach($task->getComments()as $comment){
    echo $comment->getText().", ";
    echo "имя задачи".$comment->getTask()->getDescription().PHP_EOL;
}