<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
$id = $_GET['id'];
$game = $dataGames->getGame($id);
$images = $dataGames->getImages($id);
$genre = $dataGenre->getGenre($id);
$platform = $dataPlatform->getPlatform($id);
include 'game.view.php';