<?php
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/customer.class.php');

	$db = getDatabaseConnection();
    $customer = Customer::getCustomer($db,$_SESSION['id']);

	if( $_POST['confirmPassword'] == $_POST['password'] ){ 
		$id = $customer->changePassword($db, $_POST['password']);
	}
    header('Location: profile.php');
	
?>