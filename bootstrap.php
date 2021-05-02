<?php
session_start();


use App\db\Connect;
use App\models\Admin;
use App\models\Emulators;
use App\models\Games;
use App\models\Genres;
use App\models\Platforms;
use App\models\FileHandler;


include $_SERVER['DOCUMENT_ROOT']."/db/config.php";
include $_SERVER['DOCUMENT_ROOT']."/db/Connect.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Admin.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Validator.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Games.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Platforms.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Genres.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/FileHandler.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Emulators.php";


$conn = Connect::make(CONN);

$dataAdmin = new Admin($conn);
$dataGames = new Games($conn);
$dataPlatform = new Platforms($conn);
$dataGenre = new Genres($conn);
$dataEmulator = new Emulators($conn);