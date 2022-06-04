<?php 
	declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
		header('Location: login.php');
	}

	require_once('database/connection.db.php');
	require_once('templates/common.tpl.php');
	require_once('database/dish.class.php');

	//TODO: take this array out and read this data from DB instead
	/*$orders = array(
		array('name' => 'Menu','price'=>'26'),
		array('name' => 'Coca_Cola','price'=>'16')
	);*/

	$db = getDatabaseConnection();
	$orders = array();

	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $id){
			$dish = Dish::getDishByID($db,$id);
			echo var_dump($dish);
		}
	}

	

	drawHeader($_SESSION['name']);
	//echo var_dump($_SESSION['cart']);
	drawCart($orders);
	drawFooter();
?>
