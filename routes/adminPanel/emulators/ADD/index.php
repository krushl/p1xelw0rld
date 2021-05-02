<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

$platforms = $dataPlatform->getAllPlatform();
$genres = $dataGenre->getAllGenre();
if (isset($_POST['btnSubmit'])) {

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['platform'] = implode(',',$_POST['platform']);
    $data['description'] = Validator::preProcessing($_POST['description']);
    [$errors, $emulatorName] = FileHandler::uploadFile('file', $validTypesApp, "/assets/emulators/".$data['name']."/",100);
    if (empty($errors)) {
        $data['file'] = $emulatorName;
    }

    $dataEmulator->addEmulator($data);

}


include "emulator.view.php";