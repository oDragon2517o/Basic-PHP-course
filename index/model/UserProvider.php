<?php

require_once 'model/User.php';

class UserProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getByUsernameAndPassword(string $login, string $password): ?User
    {
        $statement = $this->pdo->prepare(
            'SELECT id, name, login FROM users WHERE login = :login AND password = :password LIMIT 1'
        );
        $statement->execute([
            'login' => $login,
            'password' => $password
        ]);

        // var_dump($login);
        return $statement->fetchObject(User::class, [$login]) ?: null;
    }
}
