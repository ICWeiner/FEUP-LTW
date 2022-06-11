<?php
    require_once('database/connection.db.php');



    $db = getDatabaseConnection();


    $requestReceiver = file_get_contents("php://input");
    $cart = json_decode($requestReceiver, true);

    $total = $cart["total"];
    $date = $cart["date"];
    $state = $cart["status"];
    $user = $cart["userId"];

    $stmt = $db->prepare('INSERT INTO FoodOrder (OrderDate, OrderState, User) VALUES ( ?, ?, ?);
    ');

    $stmt->execute(array($date, $state, $user));
    $orderId = $db->lastInsertId();

    foreach ($cart["items"] as $dish){
        $dishId = $dish["dishId"];
        $quantity = $dish["quantity"];
        $stmt = $db->prepare('INSERT INTO DishOrder (OrderId, DishId, quantity) VALUES ( ?, ?, ?);
        ');

        $stmt->execute(array($orderId, $dishId, $quantity));
    }

    session_start();
    unset($_SESSION['cart']); 
    //$_SESSION['cart'] = array();
?>