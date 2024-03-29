<?php 
  ob_start();
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>My shop</title>
	<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
</head>
<body>
	<h1>Frontend website</h1>
	<nav id="nav">
		<ul>
			<li ><a href='index.php?controller=front&action=home'>Home</a></li>
			<li><a href='index.php?controller=news&action=list_news'>News</a></li>
			<li class="active"><a href='index.php?controller=products&action=list_products'>Product</a></li>
			<?php if(isset($_SESSION['login']['username'])){?>
			<li class="logout">Hi, <?php echo $_SESSION['login']['username'];?>
			<a href='index.php?controller=users&action=logout'>Logout</a></li>
			<li><a href='admin.php'>Manage</a></li>
			<?php  }else{ ?>
				<li><a href='index.php?controller=users&action=login'>Login</a></li>
				<li><a href='index.php?controller=users&action=register'>Register</a></li>
			<?php }?>
			<li><a href='index.php?controller=products&action=cart'>My cart</a></li>
		</ul>
	</nav>
	<?php
		include 'controller/frontend_controller.php';
		$front = new FrontendControler();
		$front->handleRequest();
	?>
</body>
</html>