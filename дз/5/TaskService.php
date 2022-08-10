<?php

class TaskService
{

    public static function addComment(User $autor, Task $task, $text)
    {
        $comment = new Comment($autor, $task, $text);
        $task->setComment($comment);
    }
}