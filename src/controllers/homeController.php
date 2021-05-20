<?php
function getEvent(){
	global $db;
	$sql = 'SELECT id, movieTitle, date, hour, minute, description, address, location, participant, moviePoster, version FROM event';
	$request = $db->query($sql);
	$results = $request->fetchAll();

	return $results;
}