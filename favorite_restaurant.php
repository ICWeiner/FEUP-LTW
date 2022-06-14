<?php
    declare(strict_types = 1);
    require_once('database/connection.db.php');

    session_start();

    $db = getDatabaseConnection();


    $user = $_SESSION['id'];
    $restaurant = $_GET['restaurantId'];

    $stmt = $db->prepare('INSERT INTO Favorite (UserId, RestaurantId) VALUES ( ?, ?);');
    $stmt->execute(array($user, $restaurant));

?>