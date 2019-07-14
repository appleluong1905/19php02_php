<?php 
	$server = 'localhost'; // $server ='127.0.0.1';
	$username = 'root';
	$password = 'none'; // $password = '';
	$database = '19php02';
	
	$connect = mysqli_connect($server, $username, $password, $database);

	var_dump($connect);
?>