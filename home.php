<?php 
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/restaurant.class.php');
	require_once('templates/common.tpl.php');

	$db = getDatabaseConnection();
	$categories = Restaurant::getRestaurantCategories($db);

	drawHeader();

	foreach ($categories as $category) {
		$restaurants = Restaurant::getRestaurantsByCategory($db,$category);
		drawRestaurantsByCategory($restaurants,$category);
	}
		
	drawFooter();
?>
