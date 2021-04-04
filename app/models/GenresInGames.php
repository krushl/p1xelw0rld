<?php


namespace App\models;

use PDO;

class GenresInGames
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addGenreToGame($idGame, $idGenre)
    {
        $stmt = $this->pdo->prepare("INSERT INTO genres_in_games(id_genre, id_game) VALUES (:idGenre,:idGame)");
        $stmt->execute([
            "idGenre" => $idGenre,
            "idGame" => $idGame
        ]);
    }

//    public function deleteGenreOfGame($idGame, $idGenre)
//    {
//
//    }

}