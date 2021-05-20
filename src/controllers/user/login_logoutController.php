<?php
//Disconnect user and bring back home
session_destroy();
header('Location: ' . $router->generate('home'));
die();