<?php

include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

$platforms = $dataPlatform->getAllPlatform();

include "platforms.view.php";
