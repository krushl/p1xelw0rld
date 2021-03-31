<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

if ($_GET['action'] == 'out') {
    session_unset();
    session_destroy();
    header("Location: /");
    die();
}
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

