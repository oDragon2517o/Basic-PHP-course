<?php

class Comment
{
    public User $author;
    public Task $task;
    public string $text;

    public function __construct(User $autor, Task $task, $txt)
    {
        $this->author = $autor;
        $this->task = $task;
        $this->text = $txt;
    }

    public function getAuthor()
    {
        return $this->author;
        return $this->task;
        return $this->text;
    }

    public function setAutor($author)
    {
        $this->author = $author;
    }

    public function getText()
    {
        return $this->text;
    }
    public function getTask():Task
    {
        return $this->task;
    }
}
