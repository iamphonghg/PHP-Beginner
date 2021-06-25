<?php

  	class User {
		private $username;
		protected $email;
		public $role = 'member';
		

		public function __construct($username, $email) {
			$this->username = $username;
			$this->email = $email;
		}

		public function __destruct() {
			echo "the user $this->username was removed </br>";
		}

		public function __clone() {
			$this->username = $this->username . '(cloned)</br>';
		}

		public function addFriend() {
			echo 'add new friend';
		}

		public function message() {
			return "$this->email sent a new message";
		}

		public function getEmail() {
			return $this->email;
		}

		public function setEmail($email) {
			if (strpos($email, '@') > -1) {
				$this->email = $email;
			}
		}

		public function getUsername() {
			return $this->username;
		}
  	}

	class AdminUser extends User {
		public $level;
		public $role = 'admin';


		public function __construct($username, $email, $level) {
			$this->level = $level;
			parent::__construct($username, $email);
		}

		public function message() {
			return "$this->email, an admin, sent a new message";
		}
	}
	

  	$userOne = new User('hoa', 'hoa@secomus.com');
	$userTwo = new AdminUser('phong', 'phong@gmail.com', 5);
  	// echo get_class($userOne) . '</br>';

	// print_r(get_class_vars('User'));
	// print_r(get_class_methods('User'));

	// $userOne->setEmail('phong@secomus.con');
	// echo $userOne->getEmail() . '</br>';
	// echo $userTwo->getEmail() . 'test</br>';
	// echo $userTwo->level;
	// echo $userOne->role . '</br>';
	// echo $userTwo->role . '</br>';

	echo $userTwo->message() . '</br>';
	$userFour = clone $userOne;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  
</body>
</html>