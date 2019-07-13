<?php 
	class User {
		// thuoc tinh
		// public, protected, private
		public $username = '19php02';
		public $password;

		public function addUser($username, $password) {
			return "Add user abc $username - $password";
		}
		public function editUser() {
			echo "Edit user ". $this->username;
		}
		public function detailUser() {
			$a = 5 + 6;
			return $a;
		}
	}
?>