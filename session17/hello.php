<h1>Hello HTML</h1>
<?php 
	echo "<h2>Hello PHP</h2>";
	// bien, ham, vong lap, cau dieu kien... co ban giong javascript
	// bien trong PHP co them dau $ truoc ten bien: $userName, $password 
	// 1
	// 2 3
	// 4 5 6
	// 7 8 9 10
	$k = 1;
	for ($i = 1; $i <= 4; $i++) {
		for ($j = 1; $j <= $i; $j++) {
			echo $k++.'&nbsp&nbsp&nbsp';
		}
		echo "<br>";
	}


?>