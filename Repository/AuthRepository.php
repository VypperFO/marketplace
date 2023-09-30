<?php

namespace Repository;

use \Model\User;

class AuthRepository
{
    protected \PDO $bd;

    public function __construct()
    {
        $this->bd = \Bd::getBD();
    }

    public function getOne(string $param, string $value): User|bool
    {
        $query = $this->bd->prepare('SELECT * FROM users WHERE ' . $param . ' = ?');
        $query->setFetchMode(\PDO::FETCH_CLASS, User::class);
        $query->bindValue(1, $value);
        $query->execute();
        return $query->fetch();
    }

    public function getPassword(string $username): string
    {
        $query = $this->bd->prepare("SELECT password FROM users WHERE username = ?");
        $query->bindValue(1, $username);
        $query->execute();
        $result = $query->fetch();
        return $result[0];
    }

    public function create(User $user): void
    {
        $query = $this->bd->prepare('INSERT INTO users(username, password) VALUES (?,?)');
        $query->bindValue(1, $user->username);
        $query->bindValue(2, $user->password);
        $query->execute();
    }
}