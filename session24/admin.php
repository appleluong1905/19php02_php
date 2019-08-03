<?php session_start(); ?>
<h1>Backend website</h1>
<?php 
	if(isset($_SESSION['username'])){
		echo 'Duoc su dung backend';
	} else {
		header('Location: index.php');
	}
?>