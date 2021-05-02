<?php


namespace App\models;
include "InsertColumns.php";

use PDO;


class Games
{
    protected $pdo;
    use InsertColumns;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addGame($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO games (name, banner, description, file) 
                                        VALUES (:name,:banner,:description,:file)");
        $stmt->execute([
            "name" => $data['name'],
            "banner" => $data['banner'],
            "description" => $data['description'],
            "file" => $data['file']
        ]);

        $id = $this->pdo->lastInsertId();

        if ($id) {
            foreach ($data['genre'] as $v) {
                $this->addData('id_genre', 'id_game', "genres_in_games", $v, $id);
            }
            foreach ($data['platform'] as $v) {
                $this->addData('id_platform', 'id_game', "platforms_in_games", $v, $id);
            }
            foreach ($data['images'] as $v) {
                $stmt = $this->pdo->prepare("INSERT INTO screenshots (origName, id_game)
                                                    VALUES (:origName,:id_game)");
                $stmt->execute([
                    "origName" => $v,
                    "id_game" => $id
                ]);
            }
        }

    }

    public function deleteGame($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM games WHERE id = :id");
        $stmt->execute([
            "id" => $id
        ]);
    }

    public function editGame($id, $name, $platform, $banner, $description, $file)
    {
        $stmt = $this->pdo->prepare("UPDATE games SET name=:name,banner=:banner,
                 description=:description,file=:file WHERE id=:id");
        $stmt->execute([
            "id_game" => $id,
            "name" => $name,
            "banner" => $banner,
            "description" => $description,
            "file" => $file
        ]);
        $this->editData('id_platform', 'id_game', 'platforms_in_game');

    }

    public function getAllGames()
    {
        $stmt = $this->pdo->query("SELECT * FROM games");
        return $stmt->fetchAll();
    }

    public function getGame($id)
    {

        $stmt = $this->pdo->prepare("SELECT * FROM games WHERE id=:id");
        $stmt->execute([
            "id" => $id
        ]);
        return $stmt->fetch();
    }

    public function getImages($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM screenshots WHERE id_game = :id");
        $stmt->execute([
            'id' => $id,
        ]);

        return $stmt->fetchAll();
    }

}