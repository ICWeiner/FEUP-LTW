<?php 
	declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
        header('Location: login.php');
    }

	require_once('database/connection.db.php');
	require_once('database/restaurant.class.php');
	require_once('templates/common.tpl.php');
	require_once('templates/restaurant.tpl.php');


	$db = getDatabaseConnection();
	$categories = Restaurant::getRestaurantCategories($db);


	drawHeader($_SESSION['name']);
	drawHomeHeader();

	foreach ($categories as $category) {
		$restaurants = Restaurant::getRestaurantsByCategory($db,$category);
		drawRestaurantsByCategory($restaurants,$category);
	}
		
	drawFooter();
?>
