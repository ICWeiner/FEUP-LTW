<?php
	declare(strict_types = 1);

	class Customer{
		public string $id;
		public string $name;
		public string $email;
		public string $type;
		public string $address;
		public string $phone;

		public function __construct(string $id, string $name, string $email
		,string $type, string $address ,string $phone){
			$this->id = $id;
			$this->name = $name;
			$this->email = $email;
			$this->type = $type;
			$this->address= $address;
		}

		static function getCustomerWithPassword(PDO $db, string $email, string $password) : ?Customer {
			$stmt = $db->prepare( 'SELECT UserId, Type, UserName, email, Password, UserAddress, PhoneNumber 
				FROM User 
				WHERE lower(email) = ? AND Password = ?');

			$stmt->execute(array(strtolower($email), $password));

			if ($customer = $stmt->fetch()) {
				return new Customer(
					$customer['UserId'],
					$customer['Type'],
					$customer['UserName'],
					$customer['email'],
					$customer['Password'],
					$customer['UserAddress'],
					$customer['PhoneNumber']
					);
			}else return null;
		}

	}
?>