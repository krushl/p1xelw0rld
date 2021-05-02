<?php
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $dataPlatform->addPlatform($name);
}


include "platform.view.php";