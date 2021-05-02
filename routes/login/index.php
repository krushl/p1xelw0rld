<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";


if (isset($_POST['btnSubmit'])) {
    $user = $dataAdmin->auth($_POST['login'], $_POST['password']);
    if ($user) {
        $_SESSION['auth'] = true;
        header("Location: /routes/adminPanel/");
    } else {
        header("Location: /");
        die();
    }
}



include 'login.view.php';

