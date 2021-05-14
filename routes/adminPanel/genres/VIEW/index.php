<?php

include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

$genres = $dataGenre->getAllGenre();

include "genres.view.php";
