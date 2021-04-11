<?php
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $platform[]=$_POST['platform'];
    $banner = $_FILES['banner']['name'];
    $description = $_POST['description'];
    $file = $_FILES['file']['name'];
    foreach($platform as $v){
        $dataGames->addGame($name,(int)$v,$banner,$description,$file);
    }

    echo "cool";
}else{
    echo "not cool";
}

include $_SERVER['DOCUMENT_ROOT']."/routes/adminPanel/games/games.view.php";

