<?php
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/dish.class.php');
	require_once('imgUpload.php');
	require_once('templates/addRestaurant.tpl.php');//TODO: JANKY, fix later

	$db = getDatabaseConnection();
    $dishId = $_POST['dishId'];

    Dish::updateDish($db, $_POST['dishName'], floatval($_POST['price']), $_POST['category'], intval($_POST['dishId']));

    if(isset($_FILES['dishImage']['tmp_name'])){
        if (!is_dir('temp')) mkdir('temp');
        move_uploaded_file($_FILES['dishImage']['tmp_name'], __DIR__ . "/temp/dishes.jpg");//move picture into temporary folder
        uploadImage($db,"dishes",$dishId);
    }

    header('Location: restaurantPickerPage.php');//TODO: redirecionar para a pagina do restaurante a editar
?>