<?php 
    declare(strict_types = 1);

    session_start();

    if(!isset($_SESSION['name']) ){
        header('Location: login.php');
    }

    require_once('database/connection.db.php');
    require_once('database/dish.class.php');
    require_once('templates/common.tpl.php');

    $db = getDatabaseConnection();
    $id = intval($_GET['id']);

    $categories = Dish::getDishesCategories($db, $id);

    drawHeader($_SESSION['name']);
    

    foreach($categories as $category){
        $dishes = Dish::getRestaurantDishesByCategory($db, $category['name'],$id);
        drawDishesByCategory($dishes,$category['name']);
    }

    drawFooter();
?>

