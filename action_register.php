<?php
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/customer.class.php');

	$db = getDatabaseConnection();

	if( $_POST['confirmPassword'] == $_POST['password'] ){ //TODO strcmp doesnt work 
		Customer::registerCustomer($db, $_POST['username'], $_POST['password'],	 $_POST['email'], $_POST['address'], $_POST['phone']);
		header('Location: login.php');
	}else{
		header('Location: register.php');
	}
	
	
?>