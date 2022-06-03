<?php 
    declare(strict_types = 1);

    session_start();

    if(!isset($_SESSION['name']) ){
        header('Location: login.php');
    }

    require_once('templates/common.tpl.php');

    //TODO: take this array out and read this data from DB instead
    $orders = array(
        array('name' => 'Menu','price'=>'26'),
        array('name' => 'Coca_Cola','price'=>'16')
    );

    drawHeader($_SESSION['name']);
    echo var_dump($_SESSION['cart']);
    drawCart($orders);
    drawFooter();
?>
