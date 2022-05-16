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

  function getRestaurantsCategories(PDO $db) {
    $stmt = $db->prepare('SELECT Category  FROM Restaurant LIMIT 10');
    $stmt->execute(array());

    $categories = array();

    while ($category = $stmt->fetch()) {
      $categories[] = array(
        'name' => $category['Category']
      );
    }

    return $categories;
  }


  // Pegar só o restaurante
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
  //Agora sinto que está errado
  function getDishCategories(PDO $db, int $type) {
    $stmt = $db->prepare('SELECT DishId, Name, Price, Category FROM Dish WHERE Category = ?');
    $stmt->execute(array($type));

    $dishes = [];

    while ($dish = $stmt->fetch()) {
      $dishes[] = array(
        'id' => $dish['DishId'],
        'name' => $dish['Name'],
        'price' => $dish['Price']
        //'category' => $restaurant['Category']  // Acho que não vai ser preciso porque fica dentro da secção
      );
    }
    
    return $dishes;
  }


  function getRestaurantDishes(PDO $db, int $id) {
    $stmt = $db->prepare('SELECT DishId, Name, Price, Category FROM Dish WHERE RestaurantId = ?');
    $stmt->execute(array($id));

    $dishes = [];

    while ($dish = $stmt->fetch()) {
      $dishes[] = array(
        'id' => $dish['DishId'],
        'name' => $dish['Name'],
        'price' => $dish['Price'],
        'category' => $dish['Category']
      );
    }

    return $dishes;
  }




?>