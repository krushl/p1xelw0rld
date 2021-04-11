<?php
session_start();

use App\db\Connect;
use App\models\Admin;
use App\models\Games;
use App\models\Platforms;


include $_SERVER['DOCUMENT_ROOT']."/db/config.php";
include $_SERVER['DOCUMENT_ROOT']."/db/Connect.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Admin.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Validator.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Games.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Platforms.php";

$conn = Connect::make(CONN);

$dataAdmin = new Admin($conn);
$dataGames = new Games($conn);
$dataPlatform = new Platforms($conn);