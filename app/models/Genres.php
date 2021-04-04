<?php


namespace App\models;

use PDO;

class Genres
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addGenre($genre)
    {
        $stmt = $this->pdo->prepare("INSERT INTO genres VALUE (genre=:genre)");
        $stmt->execute([
            "genre" => $genre
        ]);
    }

    public function editGenre($id, $genre)
    {
        $stmt = $this->pdo->prepare("UPDATE genres SET genre = :genre WHERE id_genre = :id");
        $stmt->execute([
            "id" => $id,
            "genre" => $genre
        ]);
    }

    public function deleteGenre($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM genres WHERE id_genre =:id");
        $stmt->execute([
            "id" => $id
        ]);
    }

    public function getAllGenre()
    {
        $stmt = $this->pdo->query("SELECT * FROM genres");
        return $stmt->fetchAll();
    }

}