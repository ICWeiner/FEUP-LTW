<?php
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/customer.class.php');
	require_once('imgUpload.php');

	$db = getDatabaseConnection();

	if( $_POST['confirmPassword'] == $_POST['password'] ){ //TODO strcmp doesnt work 
		$id = Customer::registerCustomer($db, $_POST['username'], $_POST['password'], $_POST['email'], $_POST['address'], $_POST['phone']);
		if (!is_dir('images')) mkdir('temp');
		move_uploaded_file($_FILES['userImage']['tmp_name'], __DIR__ . "/temp/user.jpg");//move picture into temporary folder
		uploadImage($db,"users",$id);
		header('Location: login.php');
	}else{
		header('Location: register.php');
	}
	
	
?>