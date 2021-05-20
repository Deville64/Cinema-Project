<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ASSETS ?>css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
</head>

<body>
    <header id="sticky">
        <div class="wrapper">
            <div id="logo">
                <a href="<?php echo $router->generate('home'); ?>">
                    <img src="<?php echo ASSETS ?>image/logo.png" alt="">
                </a>
            </div>
            
            <nav id="menu">
                <form action="" method="get">
                    <label for="search">Recherche</label>
                    <input type="text" onkeyup="searchMovie()" class="searchBar" onclick="showHideDropDown()" id="search" autocomplete="off" placeholder=" Rechercher un film, une série">
                    <input type="submit" value="Rechercher">
                    <div id="dropDown" class="dropdown-content"></div>
                </form>
                
                <label for="show-menu" class="show-menu">Menu</label>
                <input type="checkbox" id="show-menu" role="button">
                <ul id="jsp">
                    <li><a href="<?php echo $router->generate('createEvent'); ?>">Proposer une séance</a></li>
                    <li><a href="<?php echo $router->generate('profile'); ?>">Profil</a></li>
                    <li><a href="<?php echo $router->generate('logout'); ?>">Deconnexion</a></li>
                </ul>
            </nav>
        </div>
    </header>