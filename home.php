<?php 
    declare(strict_types = 1); 

    require_once('database/connection.db.php');
    require_once('database/restaurant.db.php');
    require_once('templates/common.tpl.php');

    $db = getDatabaseConnection();
    $categories = getRestaurantsCategories($db);


    drawHeader();

    foreach ($categories as $category) {
        drawRestaurantsCategories($categories);
        }
        
    drawFooter(); 
?>
