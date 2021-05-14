<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
$id=$_GET['id'];
$platforms = $dataPlatform->getAllPlatform();
$emulators = $dataEmulator->getAllEmulators();

if (isset($_POST['btnEdit'])) {
    $dataEmulator->deleteEmulator($id);
    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['platform'] = implode(',', $_POST['platform']);
    $data['description'] = Validator::preProcessing($_POST['description']);
    [$errors, $emulatorName] = FileHandler::uploadFile('file', $validTypesApp, "/assets/emulators/" . $data['name'] . "/", 100);
    if (empty($errors)) {
        $data['file'] = $emulatorName;
    }

    $dataEmulator->addEmulator($data);

}

include "edit.view.php";