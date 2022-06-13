<?php
	declare(strict_types = 1);

	class Restaurant{
		public string $id;
		public string $name;
		public string $category;
		public string $address;
		public string $ownerid;

		public function __construct(string $id, string $name, string $category,string $address, string $ownerid){

			$this->id = $id;
			$this->name = $name;
			$this->category = $category;
			$this->address = $address;
			$this->ownerid = $ownerid;
		}

		static function getRestaurants(PDO $db, int $count) : array {
			$stmt = $db->prepare('SELECT RestaurantId, RestaurantName,Category,RestaurantAddress, OwnerId FROM Restaurant LIMIT ?');
			$stmt->execute(array($count));

			$restaurants = array();

			while ($restaurant = $stmt->fetch()) {
					$restaurants[] = new Restaurant(
						$restaurant['RestaurantId'],
						$restaurant['RestaurantName'],
						$restaurant['Category'],
						$restaurant['RestaurantAddress'],
						$restaurant['OwnerId']
				);
			}

			return $restaurants;
		}

		// O outro get restaurants não funciona não sei porquê

	static function newGetRestaurants(PDO $db) : array {
		$stmt = $db->prepare('SELECT RestaurantId, RestaurantName FROM Restaurant');
		$stmt->execute(array());

		$restaurants = [];

		while($restaurant = $stmt->fetch()){
			$restaurants[] = array(
			'id' => $restaurant['RestaurantId'],
			'name' => $restaurant['RestaurantName']);
		}
		
		return $restaurants;
	}

		static function getRestaurantCategories(PDO $db) : array {
			$stmt = $db->prepare('SELECT DISTINCT Category  FROM Restaurant LIMIT 10');
			$stmt->execute(array());

			$categories = array();

			while ($category = $stmt->fetch()) {
			  $categories[] = $category['Category'];
			}


			return $categories;
		 }

		 static function getRestaurantsByCategory(PDO $db, string $category) : array{
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



		static function getRestaurant(PDO $db, string $id) : Restaurant {
			$stmt = $db->prepare('SELECT RestaurantId, RestaurantName,Category,RestaurantAddress, OwnerId FROM Restaurant WHERE RestaurantId = ?');
			$stmt->execute(array($id));

			$restaurant = $stmt->fetch();

			return new Restaurant(
				$restaurant['RestaurantId'],
				$restaurant['RestaurantName'],
				$restaurant['Category'],
				$restaurant['RestaurantAddress'],
				$restaurant['OwnerId']
			);
		}

		static function searchRestaurants(PDO $db, string $search) : array {
			$stmt = $db->prepare('SELECT RestaurantId, RestaurantName, Category FROM Restaurant WHERE RestaurantName LIKE ?');			
			$stmt->execute(array($search . '%'));
			
			$restaurants = [];
			
			while($restaurant = $stmt->fetch()){		
				$restaurants[] = array(
				'id' => $restaurant['RestaurantId'],
				'name' => $restaurant['RestaurantName'],
				'category' => $restaurant['Category']);
				}
			
			return $restaurants;
		}

		
		static function registerRestaurant(PDO $db, string $name, string $category, string $address, int $ownerid) {

			$stmt = $db->prepare('INSERT INTO Restaurant (RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( ?, ? ,?, ?);
			');

			$stmt->execute(array($name, $category, $address, $ownerid));

			$id = $db->lastInsertId();
			
			return $id;
		}

		static function getRestaurantsByOwner(PDO $db, int $id) : array {
			$stmt = $db->prepare('SELECT RestaurantId, RestaurantName FROM Restaurant WHERE OwnerId = ?');
			$stmt->execute(array($id));

			$restaurants = array();
			
			while($restaurant = $stmt->fetch()){
				$restaurants[] = array(
				'id' => $restaurant['RestaurantId'], 
				'name' => $restaurant['RestaurantName']);
			}

			return $restaurants;
		}
	}
?>