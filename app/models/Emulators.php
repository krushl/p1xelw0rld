<?php


namespace App\models;

use PDO;

class Emulators
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addEmulator($name, $description, $file, $id_platform)
    {
        $stmt = $this->pdo->prepare("INSERT INTO emulators (name, description, file, id_platform) VALUES (:name,:description,:file,:id_platform)");
        $stmt->execute([
            "name" => $name,
            "description" => $description,
            "file" => $file,
            "id_platform" => $id_platform
        ]);
    }

    public function deleteEmulator($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM emulators WHERE id=:id");
        $stmt->execute([
            "id" => $id
        ]);
    }

    public function editEmulator($id, $name, $description, $file, $id_platform)
    {
        $stmt = $this->pdo->prepare("UPDATE emulators SET name=:name,description=:description,file=:file,id_platform=:id_platform WHERE id=:id");
        $stmt->execute([
            "id" => $id,
            "name" => $name,
            "description"=>$description,
            "file"=>$file,
            "id_platform"=>$id_platform
        ]);
    }

}