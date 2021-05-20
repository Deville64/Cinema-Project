<?php

function addEvent($router) {
	global $db;
	$data = [
		'address' => $_SESSION['event']['address'],
		'date' => $_SESSION['event']['date'],
		'hour' => $_SESSION['event']['hour'],
        'minute' => $_SESSION['event']['minute'],

        'idMovie' => $_SESSION['event1']['idMovie'],
		'movieTitle' => $_SESSION['event1']['movieTitle'],
		'moviePoster' => $_SESSION['event1']['moviePoster'],
		'participant' => $_SESSION['event1']['participant'],
		'description' => $_SESSION['event1']['description']
   ];
    
	$sql = 'INSERT INTO event (address, date, hour, minute, idMovie, movieTitle, moviePoster, participant, description) VALUES (:address, :date, :hour, :minute, :idMovie, :movieTitle, :moviePoster, :participant, :description)';
	$request = $db->prepare($sql);
	$request->execute($data);
	
	$_SESSION['event']['address'] = '';
	$_SESSION['event']['date'] = '';
	$_SESSION['event']['hour'] = '';
	$_SESSION['event']['minute'] = '';
	$_SESSION['event1']['participant'] = '';
	$_SESSION['event1']['description'] = '';
	$_SESSION['event1']['idMovie'] = '';
	$_SESSION['event1']['movieTitle'] = '';
	$_SESSION['event1']['moviePoster'] = '';
    header('Location: ' . $router->generate('home'));
    die();
}

if ($_POST) {
	addEvent($router);
}