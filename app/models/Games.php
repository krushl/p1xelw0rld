<?php


namespace App\models;

use PDO;

class Games
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addGame($name, $platform, $banner, $description, $file)
    {
        $stmt = $this->pdo->prepare("INSERT INTO games (name, platform, banner, description, file) 
                                        VALUES (:name,:platform,:banner,:description,:file)");
        $stmt->execute([
            "name" => $name,
            "platform" => $platform,
            "banner" => $banner,
            "description" => $description,
            "file" => $file
        ]);

        return $this->pdo->lastInsertId();
    }

    public function deleteGame($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM games WHERE id_game = :id");
        $stmt->execute([
            "id" => $id
        ]);
    }

    public function editGame($id, $name, $platform, $banner, $description, $file)
    {
        $stmt = $this->pdo->prepare("UPDATE games SET name=:name,platform=:platform,banner=:banner,
                 description=:description,file=:file WHERE id_game=:id");
        $stmt->execute([
            "id_game" => $id,
            "name" => $name,
            "platform" => $platform,
            "banner" => $banner,
            "description" => $description,
            "file" => $file
        ]);
    }

    public function getAllGames()
    {
        $stmt = $this->pdo->query("SELECT * FROM games");
        return $stmt->fetchAll();
    }

    public function getGame($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM games WHERE id_game=:id");
        $stmt->execute([
            "id"=>$id
        ]);
        return $stmt->fetch();
    }
}