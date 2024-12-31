<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Insert And Remove Element</title>
</head>
<body>

	<header><h1> <center>Array Insert And Remove Element</h1></center></header>

	<form>
		<input type="text" name="n1" placeholder="Enter Array"><br><br>
		<select name="choice">
			<option>Insert</option>
			<option>Remove</option>
		</select>
		<input type="text" name="pos" placeholder="Which Possition Enter Element?">
		<input type="text" placeholder="Enter Element" name="val">
		<input type="submit" name="sub">
		<br>
		<br>
	</form>
	

	<?php
		if(isset($_GET['sub']))
		{
			$a=$_GET['n1'];
			$array=explode(',',$a);			

			echo "Entered Element:-<br>";

			foreach ($array as $arr) 
			{
				echo "$arr";
				echo "<Br>";

			}

			$pos=$_GET['pos'];
			$val=$_GET['val'];
			$choice=$_GET['choice'];


			if ($choice=='Insert')
			{
				$array[$pos-1]=$val;

			}
			else
			{
				$array[$pos-1]=NULL;
			}
			echo "Result is <br>";
			foreach($array as $val)
			{
				echo $val." <br> ";
			}


			

		}
	?>

	</form>

</body>
</html>