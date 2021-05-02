<?php

namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

$platforms = $dataPlatform->getAllPlatform();
$genres = $dataGenre->getAllGenre();
$games = $dataGames->getAllGames();
if (isset($_POST['btnSubmit'])) {

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['platform'] = $_POST['platform'];
    $data['genre'] = $_POST['genre'];
    $data['description'] = Validator::preProcessing($_POST['description']);




    [$errors, $gameName] = FileHandler::uploadFile('file', $validTypesApp, "/assets/gamesFiles/".$data['name']."/",100);

    if (empty($errors)) {
        $data['file'] = $gameName;
    }
    [$errors, $screeshotsName] = FileHandler::uploadFiles('screenshots', $validTypesImages,"/assets/gamesImages/".$data['name']."/screenshots/");
    if (empty($errors)) {
        $data['images'] = $screeshotsName;

    }
    [$errors,$bannerName]=FileHandler::uploadFile('banner', $validTypesImages, "/assets/gamesImages/".$data['name']."/banner/");
    if (empty($errors)) {
        $data['banner']  =  $bannerName;
    }
    $dataGames->addGame($data);

}


include "games.view.php";

