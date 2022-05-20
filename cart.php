<?php 
    declare(strict_types = 1);

    session_start();

    require_once('templates/common.tpl.php');

    //TODO: take this array out and read this data from DB instead
    $orders = array(
        array('name' => 'Menu + monkey soup','price'=>'26'),
        array('name' => 'Coca-Cola 2L','price'=>'16')
    );

    drawHeader();
    drawCart($orders);
    drawFooter();
?>
