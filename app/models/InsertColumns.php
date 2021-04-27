<?php


namespace App\models;


trait InsertColumns
{


    public function addData($firstId, $secondId, $tableName, $firstIdValue, $secondIdValue)
    {
        $stmt = $this->pdo->prepare("INSERT INTO $tableName ($firstId,$secondId) VALUES (:firstIdValue,:secondIdValue)");
        $stmt->execute([
            "firstIdValue" => $firstIdValue,
            "secondIdValue" => $secondIdValue
        ]);
    }

    public function editData($firstId, $secondId, $tableName, $firstIdValue, $secondIdValue)
    {
        $stmt = $this->pdo->prepare("UPDATE $tableName SET $firstId=:firstIdValue WHERE $secondId=:secondIdValue");
        $stmt->execute([
            "firstIdValue" => $firstIdValue,
            "secondIdValue" => $secondIdValue
        ]);
    }

    public function deleteData($firstId, $secondId, $tableName, $firstIdValue, $secondIdValue)
    {
        $stmt = $this->pdo->prepare("DELETE FROM $tableName WHERE $firstId = :firstIdValue AND $secondId = :secondIdValue");
        $stmt->execute([
            "firstIdValue" => $firstIdValue,
            "secondIdValue" => $secondIdValue
        ]);

    }

    public function getData($fieldName, $firstTableName, $secondTableName,  $firstId, $secondId, $firstIdValue, $secondIdValue)
    {
        $stmt = $this->pdo->prepare("SELECT $firstTableName->$fieldName FROM $firstTableName JOIN $secondTableName WHERE $firstTableName->$firstId = :firstIdValue AND $secondTableName->$secondId = :secondIdValue");
        $stmt->execute([
            "firstIdValue" => $firstIdValue,
            "secondIdValue" => $secondIdValue
        ]);

    }
}