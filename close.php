<?php session_start();

require 'admin/config.php';
require 'function.php';

session_destroy();

header('Location: '.RUTA.'login.php');




?>