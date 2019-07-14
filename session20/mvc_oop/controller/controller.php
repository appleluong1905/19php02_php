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
					echo "<p>Ban dang o trang user</p>";
					break;
				default:
					# code...
					break;
			}
		}
	}
?>