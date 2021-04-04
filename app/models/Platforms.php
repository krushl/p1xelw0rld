<?php


namespace App\models;

use PDO;


class Platforms
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllPlatform()
    {
        $stmt = $this->pdo->query("SELECT * FROM platforms");
        return $stmt->fetchAll();
    }

    public function editPlatform($id, $name)
    {
        $stmt = $this->pdo->prepare("UPDATE platforms SET name=:name WHERE id_platform=:id");
        $stmt->execute([
            "id" => $id,
            "name" => $name
        ]);
    }

    public function deletePlatform($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM platforms WHERE id_platform=:id");
        $stmt->execute([
            "id"=>$id
        ]);
    }


}