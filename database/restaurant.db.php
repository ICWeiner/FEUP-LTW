<?php
  declare(strict_types = 1);


  function getRestaurant(PDO $db, int $id) : array {
    $stmt = $db->prepare('SELECT RestaurantId, RestaurantName FROM Restaurant WHERE RestaurantId = ?');
    $stmt->execute(array($id));

    $restaurant = $stmt->fetch();

    return array(
      'id' => $restaurant['RestaurantId'], 
      'name' => $restaurant['RestaurantName']
      //'categories' => getRestaurantsCategories($db)
    );
  }

  function getRestaurantsCategories(PDO $db) {
    $stmt = $db->prepare('SELECT DISTINCT Category  FROM Restaurant LIMIT 10');
    $stmt->execute(array());

    $categories = array();

    while ($category = $stmt->fetch()) {
      $categories[] = array(
        'name' => $category['Category']
      );
    }

    return $categories;
  }


  function getRestaurantsByCategory(PDO $db, string $category){
    $stmt = $db->prepare('SELECT RestaurantId, RestaurantName FROM Restaurant WHERE Category = ?');
    $stmt->execute(array($category));

    $restaurants = [];

    while($restaurant = $stmt->fetch()){
      $restaurants[] = array(
        'id' => $restaurant['RestaurantId'], 
        'name' => $restaurant['RestaurantName']);
    }

    return $restaurants;
  }

  //To get all dishes from a restaurant
  function getRestaurantDishes(PDO $db) {
    $stmt = $db->prepare('SELECT Name, Price FROM Dish LIMIT 10');
    $stmt->execute(array());

    $dishes = [];

    while ($dish = $stmt->fetch()) {
      $dishes[] = array(
        'name' => $dish['Name'],
        'price' => $dish['Price']
      );
    }

    return $dishes;
  }

  function getDishesCategories(PDO $db) {
    $stmt = $db->prepare('SELECT DISTINCT Category FROM Dish LIMIT 10');
    $stmt->execute(array());

    $categories = [];

    while ($category = $stmt->fetch()) {
      $categories[] = array(
        'name' => $category['Category'],
      );
    }

    return $categories;
  }

  function getDishesByCategory(PDO $db, string $category){
    $stmt = $db->prepare('SELECT DishId, Name, Price FROM Dish WHERE Category = ?');
    $stmt->execute(array($category));

    $dishes = [];

    while($dish = $stmt->fetch()){
      $dishes[] = array(
        'id' => $dish['DishId'], 
        'name' => $dish['Name'],
        'price' => $dish['Price']
      );
    }

    return $dishes;
  }
 
?>