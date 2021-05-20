<?php
// Create routes for logged site

// User
$router->map('GET|POST', '/profile', 'user/login_profile.php', 'profile');
$router->map('GET', '/logout', 'user/login_logout.php', 'logout');


// Event
$router->map('GET|POST', '/createEvent', 'event/login_createEvent.php', 'createEvent');
$router->map('GET|POST', '/emplacement', 'event/login_createEvent1.php', 'emplacement');
$router->map('GET|POST', '/confirmEvent', 'event/login_createEvent2.php', 'confirmEvent');