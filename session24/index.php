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
			<li><a href='index.php?controller=front&action=home'>Home</a></li>
			<li><a href='index.php?controller=news&action=list_news'>News</a></li>
			<li><a href='index.php?controller=products&action=list_products'>Product</a></li>
			<li><a href='index.php?controller=users&action=login'>Login</a></li>
			<li><a href='index.php?controller=users&action=register'>Register</a></li>
		</ul>
	</nav>
	<?php
		include 'controller/frontend_controller.php';
		$front = new FrontendControler();
		$front->handleRequest();
	?>
</body>
</html>