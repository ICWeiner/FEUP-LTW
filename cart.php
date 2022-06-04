<?php 
	declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
		header('Location: login.php');
	}

	require_once('database/connection.db.php');
	require_once('templates/common.tpl.php');
	require_once('database/dish.class.php');

	$db = getDatabaseConnection();
	$order = array();

	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $id){
			$dish = Dish::getDishByID($db,$id);
			array_push($order, $dish);
		}
	}

	

	drawHeader($_SESSION['name']);
	//echo var_dump($order);
	drawCart($order);
	drawFooter();
?>
