<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

if($_GET['id']){
    $dataGenre->deleteGenre($_GET['id']);

}
header("Location: /routes/adminPanel/games/VIEW/index.php");