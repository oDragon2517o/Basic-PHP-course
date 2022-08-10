<?php

class User
{
    public string $username;
    public ?string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;
    public DateTime $dateCreated;
    
}
