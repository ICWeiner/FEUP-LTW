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

        static function registerDish(PDO $db, string $name, float $price, string $category, int $restaurant) {

			$stmt = $db->prepare('INSERT INTO Dish (Name, Price, Category, RestaurantId) VALUES ( ?, ? ,?, ?);
			');

			$stmt->execute(array($name, $price, $category, $restaurant));


			$id = $db->lastInsertId();
			
			return $id;
		  }
    }
?>