<!DOCTYPE html>
<html>
<head>
	<title>Add news</title>
</head>
<body>
	<?php 
	// Xu ly add news
	include 'config/connect.php';
	if (isset($_POST['add_news'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$sql = "INSERT INTO news(title, description) VALUES('$title', '$description')";
		if (mysqli_query($connect, $sql) === TRUE) {
			header('Location: list_news.php');
		}
	}
	?>
	<h1>Add news</h1>
	<form method="post" action="#">
		<p>
			Title:
			<input type="text" name="title">
		</p>
		<p>
			Description:
			<textarea rows="6" name="description"></textarea>
		</p>
		<p>
			Image:
			<input type="file" name="image">
		</p>
		<p><input type="submit" name="add_news" value="Add news"></p>
	</form>
</body>
</html>