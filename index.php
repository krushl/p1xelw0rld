<?php

session_start();
unset($_SESSION);
session_unset();
session_destroy();
if(isset($_SESSION['screen_width'])){
//    echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
} else if(isset($_REQUEST['width'])) {
    $_SESSION['screen_width'] = $_REQUEST['width'];

} else {
    echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width;</script>';
}

include "index.view.php";