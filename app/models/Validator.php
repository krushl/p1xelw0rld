<?php

namespace App\models;

class Validator
{
    public static function preProcessing($data)
    {
        return htmlspecialchars(trim($data));
    }

    public static function validLength($name, $data, $field, $minLength = 4, $maxLength = 32)
    {
        if (mb_strlen($data) < $minLength) {
            $_SESSION['errors'][$field] = "В поле \"$name\" должно быть указано не менее $minLength симв. \n";
            return false;
        }
        if (strlen($data) > $maxLength) {
            $_SESSION['errors'][$field] = "В поле \"$name\" должно быть указано не более $maxLength симв. \n";
            return false;
        }
        unset($_SESSION['errors'][$field]);
        return true;
    }
}

