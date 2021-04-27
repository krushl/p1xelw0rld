<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

$games = $dataGames->getAllGames();

include "games.view.php";