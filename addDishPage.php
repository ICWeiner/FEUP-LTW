<?php 
    declare(strict_types = 1);

	session_start();

	if(!isset($_SESSION['name']) ){
        header('Location: login.php');
    }

    require_once('database/connection.db.php');
	require_once('templates/common.tpl.php');
    require_once('templates/addRestaurant.php');
    require_once('action_addRestaurant.php');

	$db = getDatabaseConnection();

    drawHeader($_SESSION['name']);
    drawDishRegister();
    drawFooter();
?>