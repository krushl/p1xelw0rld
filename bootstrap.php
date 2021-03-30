<?php
session_start();

use App\db\Connect;
use App\models\Admin;

include $_SERVER['DOCUMENT_ROOT']."/db/config.php";
include $_SERVER['DOCUMENT_ROOT']."/db/Connect.php";
include $_SERVER['DOCUMENT_ROOT']."/app/models/Admin.php";

$conn = Connect::make(CONN);

$dataAdmin = new Admin($conn);