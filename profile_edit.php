<?php 
	declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
		header('Location: login.php');
	}

	require_once('database/connection.db.php');
	require_once('database/customer.class.php');
	require_once('templates/common.tpl.php');
	require_once('templates/customer.tpl.php');

	$db = getDatabaseConnection();

	$customer = Customer::getCustomer($db, $_SESSION['id']);

	drawHeader($_SESSION['name']);
	drawEditProfile($customer);
	drawFooter();
?>