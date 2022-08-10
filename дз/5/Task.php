<?php

include_once "User.php";

class Task
{
    private ?string $description = null;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private ?User $user;
    private array $comments = [];

    function __construct(User $user = null, string $description = null)
    {

        $this->user = $user;
        $this->description = $description;
        $this->setDateCreated();
        $this->dateUpdated = new DateTime();
    }


    function setDescription(string $txt)
    {
        $this->setDateUpdated();
        $this->description = $txt;
    }


    function setDateCreated()
    {
        $this->dateCreated = new DateTime();
    }
    function setDateUpdated()
    {
        $this->dateUpdated = new DateTime();
    }
    function setDateDone()
    {
        $this->dateDone = new DateTime();
    }


    function getdateCreated()
    {
        return $this->dateCreated;
    }
    function getDateUpdated()
    {
        return $this->dateUpdated;
    }
    function getDateDone()
    {
        return $this->dateDone;
    }
    function getComments()
    {
        return $this->comments;
    }
    function getDescription()
    {
        return $this->description;
    }



    function markAsDone()
    {
        $this->setDateUpdated();
        $this->setDateDone();
        $this->isDone = true;
    }


    public function setComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }
}
