<?php
// Use session 
session_start();

// Load dependecies composer
require_once 'vendor/autoload.php';

// Load custom files
require_once 'src/config/config.php';
require_once 'src/config/database.php';
require_once 'src/includes/tools.php';


// Init router
$router = new AltoRouter();
$router->setBasePath(BASEPATH);

// Create route
require_once 'src/routes/login.php';
require_once 'src/routes/public.php';

// Execute routes
$match = $router->match();

// Display content
if ($match){
    // Prepare laod controllers
    $controller = explode('.php', $match["target"]);  //Separe nom de ficher du .php
    $controller = $controller[0] . 'Controller.php';  //Fusione nom du fichier avec Controller.php

    // Params routes
    if (!empty($match['params'])){
        $_GET = array_merge($_GET, $match['params']);
    }

    // Check login-admin
    checkLogin($router, $match['target']);

    require_once CONTROLLERS . $controller; //Load Controllers
    require_once PAGES . $match['target']; // Load views
    } else{
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        require_once PAGES . '404.php';
    }