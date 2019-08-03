<?php 
	class FrontendControler {

		function handleRequest(){
			$controller = isset($_GET['controller'])?$_GET['controller']:'front';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($controller) {
				case 'front':
					$this->handleFront($action);
					break;
				case 'news':
					$this->handleNews($action);
					break;
				case 'products':
					$this->handleProduct($action);
					break;
				case 'users':
					$this->handleUsers($action);
					break;
				default:
					# code...
					break;
			}
		}

		function handleFront($action){

		}

		function handleProduct($action){
			
		}

		function handleUsers($action){
			switch ($action) {
				case 'login':
					# code...
					echo "Ban muon login?";
					break;
				case 'register':
					# code...
					if (isset($_POST['register'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						
					}
					include 'view/users/register.php';
					break;
				default:
					# code...
					break;
			}
		}

		function handleNews($action){
			
		}

	}
?>