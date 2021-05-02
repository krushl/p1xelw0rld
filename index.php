<?php
session_start();
unset($_SESSION);
session_unset();
session_destroy();
include "index.view.php";