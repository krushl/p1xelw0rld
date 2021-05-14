<?php

namespace App\Models;

class FileHandler
{   //TODO Метод для загрузки нескольких файлов
    /**
     * @param $fieldName
     * @param $validTypes
     * @param $dirName
     * @param int $maxSize
     * @return array
     */
     public static function uploadFiles($fieldName, $validTypes, $dirName, $maxSize = 15)
    {
        $errors = "";
        $names = [];
        $path = $_SERVER['DOCUMENT_ROOT'] . $dirName;
        //TODO Создание пути для файлов
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        //TODO Загрузка файла
        foreach ($_FILES[$fieldName]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $file_tmp_name = $_FILES[$fieldName]["tmp_name"][$key];
                $file_name = time().$_FILES[$fieldName]["name"][$key];
                $file_size = $_FILES[$fieldName]["size"][$key];
                $file_type = $_FILES[$fieldName]["type"][$key];
                if (in_array($file_type, $validTypes)) {
                    if ($file_size > $maxSize * 1024 * 1024) {
                        $errors = "Размер превышает " . $maxSize . " мб";
                    } else {
                        move_uploaded_file($file_tmp_name, $path . $file_name);
                        $names[] = $file_name;
                    }
                } else {
                    $errors = "Не удалось загрузить файл";
                }

            }

        }
        return [$errors, $names];
    }


    public static function uploadFile($fieldName, $validTypes, $dirName, $maxSize = 15)
    {
        $errors = "";
        $name = "";

        $file_tmp_name = $_FILES[$fieldName]["tmp_name"];
        $file_name =  time().$_FILES[$fieldName]["name"];
        $file_size = $_FILES[$fieldName]["size"];
        $file_type = $_FILES[$fieldName]["type"];
        $path = $_SERVER['DOCUMENT_ROOT'] . $dirName;
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        if (in_array($file_type, $validTypes)) {
            if ($file_size > $maxSize * 1024 * 1024) {
                $errors = "Размер превышает " . $maxSize . " мб";
            } else {
                move_uploaded_file($file_tmp_name, $path . $file_name);
                $name = $file_name;
            }
        }


        return [$errors, $name];
    }


}
