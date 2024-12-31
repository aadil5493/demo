<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="n1" placeholder="enter array">

		<input type="submit" name="sub">
	</form>
	<?php
		if(isset($_GET['sub']))
		{
			$a=$_GET['n1'];
			$arr=explode(",",$a);
			print_r($arr);
			echo "<br>";
			echo array_sum($arr);
		}
	?>
</body>
</html>