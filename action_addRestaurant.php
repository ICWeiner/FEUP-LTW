<?php
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/restaurant.class.php');
	require_once('imgUpload.php');

	$db = getDatabaseConnection();

    $id = Restaurant::registerRestaurant($db, $_POST['restaurantName'], $_POST['category'], $_POST['address'], $_SESSION['id']);
    if (!is_dir('images')) mkdir('temp');
    move_uploaded_file($_FILES['restaurantImage']['tmp_name'], __DIR__ . "/temp/restaurant.jpg");//move picture into temporary folder
    uploadImage($db,"restaurants",$id);

    header('Location: home.php');
?>