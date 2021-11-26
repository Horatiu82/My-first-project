<?php

//require_once 'customFunctions.php';

define('APP_PATH', 'app/');
define('MODELS', 'models/');
define('VIEWS', 'views/');
define('CONTROLLERS', 'controllers/');

spl_autoload_register(function ($className) {
    $relPath = '';
    $class = strtolower($className);
    if (substr_count($class, 'controller')) $relPath .= CONTROLLERS;
    if (substr_count($class, 'model')) $relPath .= MODELS;
    //if (substr_count($class, 'view')) $relPath .= VIEWS;

    $filePath = APP_PATH . $relPath . "$className.php";

    if (file_exists($filePath)) {
        require_once $filePath;
    } else die("Class $className NOT found");
});
