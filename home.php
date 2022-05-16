<?php 
    declare(strict_types = 1); 

    require_once('database/restaurant.db.php');
    require_once('database/connection.db.php');

    require_once('templates/common.tpl.php');
    require_once('templates/main.tpl.php');

    $db = getDatabaseConnection();
    $restaurants = getRestaurants($db, 8);

    drawHeader();
    drawMainPage($restaurants);
    drawFooter();
?>



