<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Revese Number</title>
</head>
<body>

	<header><center><h1>Revese Number</h1></center></header>

	<form>
		<input type="text" name="n1"  placeholder="Enter Number">
		<input type="submit" name="sub" >
	</form>
	<?php
		if(isset($_GET['sub']))
		{
			$n1=$_GET['n1'];
			$rev=0;
			for ($i=0; $i <5; $i++) { 

				$temp=$n1%10;
				$rev=($rev*10)+$temp;
				$n1=$n1/10;
			}
				
			

			echo "$rev";
		}
	?>

</body>
</html>