<?php 
	include 'config/database.php';
	class FrontendModel extends ConnectDB{

		function register($username, $password, $role) {

			$checkUserExist = $this->checkUserExist($username);
			// kiem tra username da ton tai chua?
			if ($checkUserExist->num_rows == 0) {
				$sql = "INSERT INTO users(role, username, password) VALUES('$role', '$username', '$password')";
				return mysqli_query($this->connect(), $sql);
			}
			return false;
			
		}

		function login($username, $password) {

			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connect(), $sql);

		}

		function checkUserExist($username) {

			$sql = "SELECT * FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(), $sql);
			
		}

		function getProductList($start, $limit) {
			$sql = "SELECT * FROM products LIMIT $start, $limit";
			return mysqli_query($this->connect(), $sql);
		}

		function getProductDetail($id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function getUserID($username) {
			$sql = "SELECT id FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(), $sql);
		}

		function addComment($productId, $userId, $content) {
			$created = date('Y-m-d h:i:s');
			$status = 1;
			$sql = "INSERT INTO comments(product_id, user_id, content, created, status) VALUES($productId, $userId, '$content', '$created', $status)";
			//var_dump($sql);exit();
			return mysqli_query($this->connect(), $sql);
		}

		function getCommentList($product_id) {
			$sql = "SELECT * FROM comments
			INNER JOIN users ON comments.user_id = users.id 
			WHERE product_id = $product_id AND status = 0";
			return mysqli_query($this->connect(), $sql);
		}

		function addRate($productId, $userId, $rate_value) {
			$created = date('Y-m-d h:i:s');
			$sql = "INSERT INTO rates(product_id, user_id, rate_value, created) VALUES($productId, $userId, $rate_value, '$created')";
			return mysqli_query($this->connect(), $sql);
		}

		function getAvgRate($product_id) {
			$sql = "SELECT AVG(rate_value) as rate_avg FROM rates WHERE product_id = $product_id";
			return mysqli_query($this->connect(), $sql);
		}

		function checkRated($userId, $product_id) {
			$sql = "SELECT * FROM rates WHERE user_id = $userId AND product_id = $product_id";
			return mysqli_query($this->connect(), $sql);
		}

		function getProductCount() {
			$sql = "SELECT count(*) as total FROM products";
			return mysqli_query($this->connect(), $sql);
		}

		function getCart($id) {
			$sql = "SELECT * FROM products WHERE id in $id";
			return mysqli_query($this->connect(), $sql);
		}

		function saveCart($user_id) {
			$created = date('Y-m-d h:i:s');
			$sql = "INSERT INTO carts(user_id, created) VALUES($user_id, '$created')";
			$connect = $this->connect();
			mysqli_query($connect, $sql);
			// lay id cua cart vua save vao db
			$last_id = $connect->insert_id;
			return $last_id;
		}

		function saveCartDetail($cart_id, $productListId) {
			$quantity = 1;
			foreach ($productListId as $key => $product_id) {
				$sql = "INSERT INTO cart_details(cart_id, product_id, quantity) VALUES($cart_id, $product_id, $quantity)";
				mysqli_query($this->connect(), $sql);
			}
			return true;
		}
	}
?>