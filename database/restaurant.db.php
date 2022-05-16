<?php
  declare(strict_types = 1);

  // Pegar só alguns restaurantes -> Para a main page
  function getRestaurants(PDO $db, int $count) {
    $stmt = $db->prepare('SELECT RestaurantId, RestaurantName FROM Restaurant LIMIT ?');
    $stmt->execute(array($count));

    $restaurants = array();
    while ($restaurant = $stmt->fetch()) {
      $restaurants[] = array(
        'id' => $restaurant['RestaurantId'],
        'name' => $restaurant['RestaurantName']
      );
    }

    return $restaurants;
  }


  function getRestaurant(PDO $db, int $id) {
    $stmt = $db->prepare('SELECT RestaurantId, RestaurantName, Category, RestaurantAdress FROM Restaurant WHERE RestaurantID = ?');
    $stmt->execute(array($id));

    $restaurant = $stmt->fetch();

    return array(
      'id' => $restaurant['RestaurantId'], 
      'name' => $restaurant['RestaurantName'], 
      'category' => $restaurant['Category'], 
      'adress' => $restaurant['RestaurantAdress'] 
      /*'owner' => getRestaurantOwner($db, $id) */  // Acho que não vai ser necessário
    );
  }

  

  // Pegar categorias em vez de Pratos diretamente?
  function getDishCategories(PDO $db, int $id) {
    $stmt = $db->prepare('SELECT DishId, Name, Price, Category FROM Dish WHERE RestaurantId = ?');
    $stmt->execute(array($id));

    $categories = [];

    while ($categorie = $stmt->fetch()) {
      $categories[] = array(
        'id' => $restaurant['DishId'],
        'name' => $restaurant['Name'],
        'price' => $restaurant['Price'],
        'category' => $restaurant['Category']
      );
    }

    return $categories;
  }


  /*function getRestaurantDishes(PDO $db, int $id) {
    $stmt = $db->prepare('SELECT DishId, Name, Price, Category FROM Dish WHERE RestaurantId = ?');
    $stmt->execute(array($id));

    $dishes = [];

    while ($dish = $stmt->fetch()) {
      $dishes[] = array(
        'id' => $restaurant['DishId'],
        'name' => $restaurant['Name'],
        'price' => $restaurant['Price'],
        'category' => $restaurant['Category']
      );
    }

    return $dishes;
  }*/




?>