<?php
// Create routes for public site

 //Log
$router->map('GET|POST', '/login', 'user/login.php', 'login');
$router->map('GET|POST', '/subscribe', 'user/subscribe.php', 'subscribe');

 //Home
$router->map('GET', '/', 'home.php', 'home');

//Movie
$router->map('GET', '/movie', 'movie/movie.php', 'movie');
$router->map('GET', '/movie/casting/[i:id]', 'movie/casting.php', 'casting');
$router->map('GET', '/movie/video/[i:id]', 'movie/video.php', 'video');
$router->map('GET', '/movie/picture/[i:id]', 'movie/picture.php', 'picture');
$router->map('GET', '/movie/critic/[i:id]', 'movie/critic.php', 'critic');

//Event
$router->map('GET', '/event', 'event/event.php', 'event');

//Footer
$router->map('GET', '/about', 'footer/about.php', 'about');
$router->map('GET', '/contact', 'footer/contact.php', 'contact');
$router->map('GET', '/condition', 'footer/condition.php', 'condition');
