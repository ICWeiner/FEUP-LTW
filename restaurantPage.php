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



	$db = getDatabaseConnection();
	$id = intval($_GET['id']);//Restaurant ID

    $categories = Dish::getDishesCategories($db, $id);
    $reviews = Review::getRestaurantReviews($db, $id); 

	drawHeader($_SESSION['name']);

	//arranjar a query, esta so a retornar 1 restaurante :< TODO why the FUCK is this here????????????????????
	$stmt = $db->prepare('SELECT DISTINCT RestaurantName FROM Restaurant WHERE RestaurantId = ?');
	$stmt->execute(array($id));
	$row = $stmt->fetch();

	drawDishesRestaurantName($row['RestaurantName']);
	
	foreach($categories as $category){
		$dishes = Dish::getRestaurantDishesByCategory($db, $category['name'],$id);
		drawDishesByCategory($dishes,$category['name']);
	}


    drawReviewSection($reviews,$id);

    drawFooter();
?>