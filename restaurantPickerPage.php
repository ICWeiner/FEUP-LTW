<?php 
    declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
        header('Location: login.php');
    }

    require_once('database/connection.db.php');
	require_once('templates/common.tpl.php');
    require_once('templates/addRestaurant.tpl.php');
    require_once('database/restaurant.class.php');

	$db = getDatabaseConnection();

    $restaurants = Restaurant::getRestaurantsByOwner($db, $_SESSION['id']);

    drawHeader($_SESSION['name']);
    drawRestaurantDropDown($restaurants);
    drawFooter();
?>