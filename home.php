<?php 
    declare(strict_types = 1); 

    require_once('database/connection.db.php');
    require_once('database/restaurant.db.php');
    require_once('templates/common.tpl.php');

    $db = getDatabaseConnection();
    $categories = getRestaurantsCategories($db);


    drawHeader();

    foreach ($categories as $category) {
        $restaurants = getRestaurantsByCategory($db,$category['name']);
        drawRestaurantsByCategory($restaurants,$category['name']);
        //print_r($restaurants);
    }
        
    drawFooter(); 
?>
