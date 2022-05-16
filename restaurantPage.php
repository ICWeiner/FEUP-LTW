<?php 
    declare(strict_types = 1); 

    require_once('templates/common.tpl.php');

    //TODO: take this array out and read this data from DB instead
    $appetizers = array(
        array('name' => 'something something','price'=>'4'),
        array('name' => 'other other','price'=>'3'),
        array('name' => 'other other','price'=>'6'),
        array('name' => 'other other','price'=>'1')
    );

    $dishes = array(
        array('name' => 'main dish','price'=>'12'),
        array('name' => 'other main dish','price'=>'23')
    );


    drawHeader();
    drawRestaurant($appetizers,$dishes);
    drawFooter(); 
?>


<?php /*
    declare(strict_types = 1); 

    require_once('templates/common.tpl.php');
    require_once('database/restaurant.db.php');


    //TODO: take this array out and read this data from DB instead
    $appetizers = array(
        array('name' => 'something something','price'=>'4'),
        array('name' => 'other other','price'=>'3'),
        array('name' => 'other other','price'=>'6'),
        array('name' => 'other other','price'=>'1')
    );

    $type = 'Meat';  // Só pra experimentar  uma coisa
    $dishes = getRestaurantDishes($db, $type);


    drawHeader();
    drawRestaurant($appetizers,$dishes);
    drawFooter();
*/
?>



