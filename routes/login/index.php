<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

if ($_GET['action'] == 'out') {
    session_unset();
    session_destroy();
}
if (isset($_POST['btnSubmit'])) {
    $user = $dataAdmin->auth($_POST['login'], $_POST['password']);
    if ($user) {
        $_SESSION['auth'] = true;
        header("Location: /");
    } else {
        header("Location: /routes/adminPanel/");
        die();
    }
}



include 'login.view.php';

