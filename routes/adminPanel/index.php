<?php
session_start();
if(!$_SESSION['auth']){
    header("Location: /");
}
include "adminPanel.view.php";
