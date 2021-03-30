<?php

namespace App\models;

use PDO;

class Admin
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function auth($login, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM admin WHERE login=:login");
        $stmt->execute([
            "login" => $login,
        ]);
        $user = $stmt->fetch();
        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        };
        return false;
    }

    public function register($login, $password)
    {
        $stmt = $this->pdo->prepare("INSERT INTO admin (login, password) VALUES (:login,:password)");
        $stmt->execute([
            "login"=>$login,
            "password" => password_hash($password, PASSWORD_DEFAULT),
        ]);
    }
}