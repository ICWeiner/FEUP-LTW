<?php 
    declare(strict_types = 1); 

    require_once('database/connection.db.php');
    require_once('database/restaurant.db.php');
    require_once('templates/common.tpl.php');

    $db = getDatabaseConnection();

    $categories = getDishesCategories($db, intval($_GET['id']));

    drawHeader();
    

    foreach($categories as $category){
        $dishes = getDishesByCategory($db, $category['name']);
        drawDishesByCategory($dishes,$category['name']);
    }

    drawFooter();
?>

