<?php
namespace App\models;
include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
if(isset($_REQUEST['width'])) {
    $_SESSION['screen_width'] = $_REQUEST['width'];
} else {
    echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width;</script>';
}
if($_SESSION['screen_width']<768){
    $_SESSION['length'] = 3;
}else if($_SESSION['screen_width']<1000){
    $_SESSION['length']=6;
}else{
    $_SESSION['length']=9;
}
$games = $dataGames->getAllGames();
$sliderCeil = [];
while(count($games)){
    $sliderCeil[]=array_splice($games,0, $_SESSION['length']);
}
include "games.view.php";