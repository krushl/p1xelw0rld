<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

if($_GET['id']){
    $dataPlatform->deletePlatforms($_GET['id']);

}
header("Location: /routes/adminPanel/games/VIEW/index.php");