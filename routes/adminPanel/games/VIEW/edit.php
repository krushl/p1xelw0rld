<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

$id = $_GET['id'];
$game = $dataGames->getGame($id);
$images = $dataGames->getImages($id);
$genre = $dataGenre->getGenre($id);
$platform = $dataPlatform->getPlatform($id);

$_SESSION['name']=$game->name;
$_SESSION['description']=$game->description;
$_SESSION['platform']=$platform->name;
$_SESSION['genre']=$genre->genre;


