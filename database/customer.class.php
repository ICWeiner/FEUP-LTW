<?php
	declare(strict_types = 1);

	class Customer{
		public int $id;
		public string $name;
		public string $email;
		public string $type;
		public string $address;
		public string $phone;

		public function __construct(int $id, string $name, string $email
		,string $type, string $address ,string $phone){
			$this->id = $id;
			$this->name = $name;
			$this->email = $email;
			$this->type = $type;
			$this->address = $address;
			$this->phone = $phone;
		}

		static function getCustomerWithPassword(PDO $db, string $email, string $password) : ?Customer {
			$stmt = $db->prepare( 'SELECT UserId, Type, UserName, email, Password, UserAddress, PhoneNumber 
				FROM User 
				WHERE lower(email) = ? AND Password = ?');

			$stmt->execute(array(strtolower($email), $password));

			if ($customer = $stmt->fetch()) {
				return new Customer(
					intval($customer['UserId']),
					$customer['UserName'],
					$customer['email'],
					$customer['Type'],
					$customer['UserAddress'],
					$customer['PhoneNumber']
					);
			}else return null;
		}

		function register($db, $password) {

			$stmt = $db->prepare('INSERT INTO User (Type, UserName, Password, UserAddress, PhoneNumber, email) VALUES (? , ?, ? ,? ,?, ?);
			');

			$stmt->execute(array($this->type, $this->name, $password, $this->address, $this->phone, $this->email));
			}

	}
?>