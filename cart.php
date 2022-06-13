<?php 
	declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
		header('Location: login.php');
	}

	require_once(__DIR__.'/database/connection.db.php');
	require_once(__DIR__.'/templates/common.tpl.php');
	require_once(__DIR__.'/database/dish.class.php');
	require_once(__DIR__.'/database/restaurant.class.php');

	$db = getDatabaseConnection();
	$order = array();
	$customerID = $_SESSION['id'];

	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $id){
			$dish = Dish::getDishByID($db,$id);
			array_push($order, $dish);
		}
		$rest = Restaurant::getRestaurant($db,$order[0]['RestaurantId']);
	}else{//car is empty, do something

	}

	

	drawHeader($_SESSION['type']);
	drawCart($order,$rest);
	drawFooter();
?>
