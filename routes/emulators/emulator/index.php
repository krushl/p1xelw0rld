<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
$id = $_GET['id'] ?? header("Location: /");
$emulator = $dataEmulator->getAllEmulators($id);
include "emulator.view.php";