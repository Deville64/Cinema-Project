<?php
//Change header if logged or not
if (empty($_SESSION['log'])) {
	$state = 'public';
} else {
	$state = 'login';
}

// Display header depending of layout
function get_header($layout = 'public'){
	global $router;
	require_once ROOT . '/views/layouts/' . $layout . '/header.php';
}

//Display footer depending of layout
function get_footer($layout = 'public'){
	global $router;
	require_once ROOT . '/views/layouts/' . $layout . '/footer.php';
}

// Display menu depending of layout
function get_menu($menu){
	global $router;
	require_once ROOT . '/views/layouts/menu/' . $menu .  '.php';
}

// Check if word "login_" is into current path to have access only if you are logged
function checkLogin($router, $path){
	$existLogin = strpos($path, 'login_');
	if ($existLogin) {
		if (empty($_SESSION['log'])) {
			header('Location: ' . $router->generate('login'));
			die();
		}
	}
}

//Convert data to fr format
function dateFormat($date){
	setlocale(LC_ALL, 'fr_FR.utf8', 'fra');
	$date = strftime('Le %A %d %B %Y', strtotime($date));
	return $date;
}
