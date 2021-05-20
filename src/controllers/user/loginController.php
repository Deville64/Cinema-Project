<?php
//Check if email is in database and find password
if (!empty($_POST)) {
	$data = ['email' => $_POST['email']];
	$sql = 'SELECT password FROM user WHERE email = :email';
	$request = $db->prepare($sql);
	$request->execute($data);
	$result = $request->fetch();

	//Compare password from database and from input to log in
	if (!empty($result['password']) && password_verify($_POST['password'], $result['password'])) {
		$sql = 'SELECT * FROM user WHERE email = :email';
		$request = $db->prepare($sql);
		$request->execute($data);
		$result = $request->fetch();

		$_SESSION['log'] = true;
		$_SESSION['id'] = $result['id'];
		$_SESSION['event']['date'] = '';
		$_SESSION['event']['address'] = '';
		$_SESSION['event1']['participant'] = '';
		$_SESSION['event1']['description'] = '';
		$_SESSION['event1']['idMovie'] = '';
		$_SESSION['event1']['movieTitle'] = '';
		$_SESSION['event1']['moviePoster'] = '';

		header('Location: ' . $router->generate('home'));
		die();
	}
}