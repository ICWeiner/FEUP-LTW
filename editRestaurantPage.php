<?php 
	declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
		header('Location: login.php');
	}

    require_once('database/connection.db.php');
    require_once('database/dish.class.php');
    require_once('templates/common.tpl.php');
    require_once('templates/restaurant.tpl.php');
    require_once('database/review.class.php');
    require_once('templates/addRestaurant.tpl.php');



	$db = getDatabaseConnection();
	$restaurantId = intval($_POST['restaurantId']);

    $categories = Dish::getDishesCategories($db, $restaurantId); 

	drawHeader($_SESSION['name']);

	//arranjar a query, esta so a retornar 1 restaurante :< TODO why the FUCK is this here????????????????????
	$stmt = $db->prepare('SELECT DISTINCT RestaurantName FROM Restaurant WHERE RestaurantId = ?');
	$stmt->execute(array($restaurantId));
	$row = $stmt->fetch();

	drawDishesRestaurantName($row['RestaurantName']);
	drawRestaurantEditButton($restaurantId);

	foreach($categories as $category){
		$dishes = Dish::getRestaurantDishesByCategory($db, $category['name'],$restaurantId);
		drawSelectedRestaurantEdit($dishes,$category['name']);
	}

    drawFooter();
?>