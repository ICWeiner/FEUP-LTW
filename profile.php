<?php 
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/customer.class.php');
	require_once('templates/common.tpl.php');

	$db = getDatabaseConnection();

	$user = Customer::getCustomerWithPassword($db,"123@mail.com","123");

	drawHeader($_SESSION['name']);
	drawProfile($user);
	drawFooter();
?>

