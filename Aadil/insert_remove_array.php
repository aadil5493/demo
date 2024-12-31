<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	
	<?php
		$arr=array(1,2,3,4,5);
		foreach ($arr as $value) {
			echo $value;
		}
		echo "<br>";
		array_push($arr,6,7,8);

		foreach ($arr as $value) {
			echo $value;
		}
		echo "<br>";
		echo array_pop($arr);
		echo "<br>";
		foreach ($arr as $value) {
			echo $value;
		}
	?>
</form>
</body>
</html>