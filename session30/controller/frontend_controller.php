<?php 
	include 'model/frontend_model.php';
  include 'libs/function.php';
	class FrontendControler {

		function handleRequest(){
			// Khoi tao model dung chung
			$frontModel = new FrontendModel();
			// khoi tao Lib dung chung
			$libs = new LibCommon();

			$controller = isset($_GET['controller'])?$_GET['controller']:'front';
			$action = isset($_GET['action'])?$_GET['action']:'home';

			switch ($controller) {
				case 'front':
					$this->handleFront($action, $frontModel, $libs);
					break;
				case 'news':
					$this->handleNews($action, $frontModel, $libs);
					break;
				case 'products':
					$this->handleProduct($action, $frontModel, $libs);
					break;
				case 'users':
					$this->handleUsers($action, $frontModel, $libs);
					break;
				case 'comment':
					$this->handleComment($action, $frontModel, $libs);
					break;
				case 'rate':
					$this->handleRate($action, $frontModel, $libs);
					break;
				default:
					# code...
					break;
			}
		}

		function handleFront($action, $frontModel, $libs){

		}

		function handleProduct($action, $frontModel, $libs){
			switch ($action) {
				case 'list_products':
					# code...
					$page = 1;
					$limit = 2;
					$page = isset($_GET['page'])?$_GET['page']:$page;
					$start = ($page - 1) * $limit;
					// total page
					$totalRecord = $frontModel->getProductCount();
					$totalRecord = $totalRecord->fetch_assoc();
					$totalRecord = $totalRecord['total'];
					$numberPage = ceil($totalRecord/$limit);
				  $listProduct = $frontModel->getProductList($start, $limit);
				  include 'view/products/list_product_frontend.php';
					break;
				case 'product_detail':
					$id = $_GET['id'];
					$detailProduct = $frontModel->getProductDetail($id);
					$detailProduct = $detailProduct->fetch_assoc();
					// get comment cua product ra
					$commentList = $frontModel->getCommentList($id);
					// get rate
					$rateAvg = $frontModel->getAvgRate($id);
					$rateAvg = $rateAvg->fetch_assoc();
					// check rated
					$users = $frontModel->getUserID($_SESSION['login']['username']);
					$userId = $users->fetch_assoc();
					$userId = $userId['id'];
					$checkRated = $frontModel->checkRated($userId, $id);
					include 'view/products/detail_product_frontend.php';
					# code...
					break;
				default:
					# code...
					break;
			}
		}

		function handleUsers($action, $frontModel, $libs){
			switch ($action) {
				case 'login':
					# code...
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$checkLogin = $frontModel->login($username, $password);
						if($checkLogin->num_rows) {
							$role = $checkLogin->fetch_assoc();
							$login['username'] = $username;
							$login['role'] = $role['role'];
							$_SESSION['login'] = $login;
							$libs->redirectPage('index.php?controller=front&action=home');
						}
					}
					include 'view/users/login.php';
					break;
				case 'register':
					# code...
					$errRegister = '';
					if (isset($_POST['register'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$role = $_POST['role'];
						if($frontModel->register($username, $password, $role) === TRUE) {
							// Cho phep dang nhap khi dang ky thanh cong!
							$login['username'] = $username;
							$login['role'] = $role;
							$_SESSION['login'] = $login;
							$libs->redirectPage('index.php?controller=front&action=home');
						} else {
								$errRegister = 'Username exist!';
						}
					}
					include 'view/users/register.php';
					break;
				case 'logout':
					unset($_SESSION['username']);
					session_destroy();
					$libs->redirectPage('index.php?controller=front&action=home');
					break;
				default:
					# code...
					break;
			}
		}

		function handleNews($action, $frontModel, $libs){
			
		}

		function handleComment($action, $frontModel, $libs) {
			switch ($action) {
				case 'add':
					if (isset($_POST['comment'])) {
						if (isset($_SESSION['login'])) {
							$content = $_POST['content'];
							$productId = $_POST['product_id'];
							$users = $frontModel->getUserID($_SESSION['login']['username']);
							$userId = $users->fetch_assoc();
							$userId = $userId['id'];
							if ($frontModel->addComment($productId, $userId, $content) === TRUE) {
								$libs->redirectPage("index.php?controller=products&action=product_detail&id=$productId");
							}
						} else {
							$libs->redirectPage("index.php?controller=users&action=login");
						}
						
					}
					break;
				
				default:
					# code...
					break;
			}
		}

		function handleRate($action, $frontModel, $libs) {
			switch ($action) {
				case 'add':
					if (isset($_POST['rate'])) {
						if (isset($_SESSION['login'])) {
							$rate_value = $_POST['rate_value'];
							$productId = $_POST['product_id'];
							$users = $frontModel->getUserID($_SESSION['login']['username']);
							$userId = $users->fetch_assoc();
							$userId = $userId['id'];
							if ($frontModel->addRate($productId, $userId, $rate_value) === TRUE) {
								$libs->redirectPage("index.php?controller=products&action=product_detail&id=$productId");
							}
						} else {
							$libs->redirectPage("index.php?controller=users&action=login");
						}
						
					}
					break;
				
				default:
					# code...
					break;
			}
		}
	}
?>