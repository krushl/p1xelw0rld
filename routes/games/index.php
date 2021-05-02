<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
//    echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
} else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
    $_SESSION['screen_width'] = $_REQUEST['width'];
    $_SESSION['screen_height'] = $_REQUEST['height'];
    header('Location: ' . $_SERVER['PHP_SELF']);
} else {
    echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
}

if($_SESSION['screen_width']<1000){
    $_SESSION['length'] = 3;
}else{
    $_SESSION['length']=9;
}
$games = $dataGames->getAllGames();
$sliderCeil = [];
//echo "<pre>";
//print_r($games);
//echo "</pre>";
while(count($games)){
    $sliderCeil[]=array_splice($games,0, $_SESSION['length']);
}
//echo "<pre>";
//print_r($sliderCeil);
//echo "</pre>";

include "games.view.php";