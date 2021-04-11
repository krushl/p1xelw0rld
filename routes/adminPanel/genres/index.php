<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";

if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $dataGenre->addPlatform($name);
}


include "genre.view.php";
