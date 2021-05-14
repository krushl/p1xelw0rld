<?php

namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
$id=$_GET['id'];
$platforms = $dataPlatform->getAllPlatform();
$emulators = $dataEmulator->getAllEmulators();



include "emulator.view.php";