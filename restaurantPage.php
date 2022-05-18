<?php 
    declare(strict_types = 1); 

    require_once('database/connection.db.php');
    require_once('database/restaurant.db.php');
    require_once('templates/common.tpl.php');

    $db = getDatabaseConnection();

    //TODO: take this array out and read this data from DB instead
    $appetizers = array(
        array('name' => 'something something','price'=>'4'),
        array('name' => 'other other','price'=>'3'),
        array('name' => 'other other','price'=>'6'),
        array('name' => 'other other','price'=>'1')
    );


    $dishes = getRestaurantDishes($db);


    drawHeader();
    drawRestaurant($appetizers,$dishes);
    drawFooter();
?>

