<?php
//Used to Show data in HTML page
$sql = 'SELECT * FROM user WHERE id =' . $_SESSION['id'];
$request = $db->query($sql);
$result = $request->fetchALL();

//Edit user
function updateUser($router){
    global $db;
    $data = [
        'gender' => $_POST['gender'],
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'birthday' => $_POST['birthday'],
        'description' => $_POST['description']
    ];

    $sql = 'UPDATE user SET gender = :gender, firstName = :firstName, lastName = :lastName, email = :email, phone = :phone, birthday = :birthday, description = :description, date_mod = NOW() WHERE id =' . $_SESSION['id'];
    $request = $db->prepare($sql);
    $request->execute($data);
    header('Location: ' . $router->generate('profile'));
    die();
}

if ($_POST) {
    updateUser($router);
}

//Select the option if there is data 
foreach ($result as $value) {
    if ($value['gender'] == 'Femme') {
        $femme = 'selected';
        $homme = '';
        $noChoice = '';
    }else if ($value['gender'] == 'Homme'){
        $femme = '';
        $homme = 'selected';
        $noChoice = '';
    }else if($value['gender'] == null){
        $femme = '';
        $homme = '';
        $noChoice = 'selected';
    }
}