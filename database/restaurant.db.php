<?php
  declare(strict_types = 1);

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

 
?>