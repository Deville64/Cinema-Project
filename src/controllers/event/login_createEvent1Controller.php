<?php

if ($_POST) {
    $_SESSION['event1'] = $_POST;
    header('Location: ' . $router->generate('confirmEvent'));
    die();
}