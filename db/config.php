<?php
const CONN = [
    "host"=>"localhost",
    "dbname"=>"pixelworld",
    "login"=>"root",
    "password"=>"root",
    "options"=>[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
];

$validTypesImages = ['image/jpeg','image/png','image/gif'];
$validTypesApp = ['application/zip','application/x-rar-compressed','application/x-zip-compressed','application/rar'];
