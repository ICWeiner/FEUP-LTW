<?php 
    declare(strict_types = 1);

    class Dish{
        public int $id;
        public string $name;
        public float $price;
        public string $category;
        public int $restaurant;

        public function __construct(int $id, string $name, float $price, string $category, int $restaurant){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->category = $category;
            $this->restaurant = $restaurant;
        }

        static function getDishesCategories(PDO $db, int $id) : array {
            $stmt = $db->prepare('SELECT DISTINCT Category FROM Dish WHERE RestaurantId = ? LIMIT 10');
            $stmt->execute(array($id));

            $categories = array();

            while ($category = $stmt->fetch()) {
                $categories[] = array(
                    'name' => $category['Category'],
                );
            }
            return $categories;
        }


        static function getRestaurantDishesByCategory(PDO $db, string $category,int $id) : array {
            $stmt = $db->prepare('SELECT DishId, Name, Price FROM Dish WHERE Category = ? AND RestaurantId =  ?');
            $stmt->execute(array($category,$id));

            $dishes = array();

            while($dish = $stmt->fetch()){
                $dishes[] = array(
                    'id' => $dish['DishId'], 
                    'name' => $dish['Name'],
                    'price' => $dish['Price']
                );
            }

            return $dishes;
        }

        static function getDishByID(PDO $db,int $id){
            $stmt = $db->prepare('SELECT DishId, Name, Price, RestaurantId FROM Dish WHERE DishId = ?');
            $stmt->execute(array($id));

            $dish = $stmt->fetch();

            return $dish; 
        }

        static function searchDishes(PDO $db, string $search) : array {
			$stmt = $db->prepare('SELECT DishId, Name, Dish.RestaurantId, RestaurantName FROM Dish, Restaurant WHERE Restaurant.RestaurantId = Dish.RestaurantId AND Name LIKE ?');			
			$stmt->execute(array($search . '%'));
			
			$dishes = [];
			
			while($dish = $stmt->fetch()){		
				$dishes[] = array(
				'id' => $dish['DishId'],
				'name' => $dish['Name'],
				'restaurant' => $dish['RestaurantId'],
                'restaurantName' => $dish['RestaurantName']);
				}
			
			return $dishes;
		}

    }
?>