<?php
session_start();

use App\models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
if (isset($_POST['btnSubmit'])) {

    unset($_SESSION['errors']['register']);
    $login = Validator::preProcessing($_POST['login']);
    $password = Validator::preProcessing($_POST['password']);
    if (Validator::validLength('login', $login, 'login') & Validator::validLength('password', $password, 'password')) {
        $id = $dataAdmin->register($_POST['login'], $_POST['password']);
        if ($id == -1) {
            $_SESSION['error']['register'] = "Админ с таким логином и паролем уже существует";
        } else if ($id > 0) {
            $_SESSION['auth'] = true;
            header("Location: /");
            die();
        }
    }
}
include "newAdmin.view.php";