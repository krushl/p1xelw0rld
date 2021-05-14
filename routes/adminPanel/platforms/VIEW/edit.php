<?php

namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
$id = $_GET['id'];

if (isset($_POST['btnEdit'])) {
    $dataPlatform->editPlatform($id, $_POST['name']);
}
include "edit.view.php";