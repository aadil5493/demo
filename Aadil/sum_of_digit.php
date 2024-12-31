<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sum Of Digit </title>
</head>
<body>


	<header><center><h1>Sum OF Digit</h1></center></header>

	<form>
		<label>Number:-</label>
		<input type="text" name='n1' placeholder="Enter Any Number"><br><br>
		<input type="submit" name="sub">

	</form>


	<?php

		if(isset($_GET['sub']))
		{
			$n1=$_GET['n1'];
			$sum=0;
			while($n1>0)
			{
				$temp=$n1%10;
				$sum=$sum+$temp;
				$n1=$n1/10;
			}
			echo "$sum";
		}
		else
		{
			echo "Enter Number";

		}

	?>



</body>
</html>