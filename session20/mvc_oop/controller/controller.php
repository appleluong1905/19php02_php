<?php 
	class Controller {

		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					# code...
					echo "<p>Ban dang o trang home</p>";
					break;
				case 'news':
					# code...
					echo "<p>Ban dang o trang news</p>";
					break;
				case 'product':
					# code...
					echo "<p>Ban dang o trang product</p>";
					break;
				case 'user':
					# code...
					// dang o trang list user
					include 'view/user/list_user.php';
					break;
				case 'add_user':
					# code...
					if (isset($_POST['add_user'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						echo $username;
					}
					include 'view/user/add_user.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>