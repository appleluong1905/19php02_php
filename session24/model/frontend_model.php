<?php 
	include 'config/database.php';
	class FrontendModel extends ConnectDB{

		function register($username, $password) {
			$sql = "INSERT INTO users(username, password) VALUES('$username', '$password')";
			return mysqli_query($this->connect(), $sql);
		}

		function login($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connect(), $sql);
		}

	}
?>