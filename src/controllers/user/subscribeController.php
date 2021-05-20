<?php

function addUser() {
	global $db;
	$data = [
		'firstName' => $_POST['firstName'],
		'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
		'lastName' => $_POST['lastName'],
		'email' => $_POST['email'],
		
	];
	$sql = 'INSERT INTO user (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)';
	$request = $db->prepare($sql);
	$request->execute($data);
	unset($_POST);
}

if ($_POST) {
    addUser();
}