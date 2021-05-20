<?php

if ($_POST) {
    $_SESSION['event'] = $_POST;
    header('Location: ' . $router->generate('emplacement'));
    die();
}