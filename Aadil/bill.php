<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Electricity Bill</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		header{
			background-color: skyblue;
			padding: 10px;
			background-size: contain;
			width: 100%;
			border: 3px solid black;
			text-align: center;
		}
		h1{

	     padding-top: 30px;
	     font-size: 50px;
		 font-family: cursive;
		 background-color: teal;
		 color:whitesmoke;
		 opacity: 0.9;
		 
	  
		}
	input
		{
			text-align: center;
			font-family:cursive;
			position:relative;
			font-size: 2em;
			background: linear-gradient(21deg, #10abff, #1beabd);
			padding: 3px;
			display: inline-block;
			border-radius:10px;

		}

		body
		{
			background-color:lightgrey;
		}

	</style>
</head>
<body>
	<header><center><h1>Electricity Bill</h1></center></header>
<hr>
<br>
<br>
	<form>
		<center>
		<br>
		<br>
		<input type="text" placeholder="Enter Number Of Unit" name="n1">
		<br>
		<br>
		<br>
		<br>
		<br>
		<input type="submit" name="sub" value="Calculate"></center>
		<br>
		<br>	

	<?php
			$unit=$_GET['n1'];
			$total;
		if(isset($_GET['sub']))
		{
			

			if($unit<=50)
			{
				$total=$unit*10;
	
			}
			else if($unit<=100)
			{
				$con2=$unit-50;
				$unit2=$con2*20;

				$total=$unit2+500;


			}
			else if($unit<=150)
			{
				$con3=$unit-100;
				$unit3=$con3*30;
				


				$total=$unit3+500+1000;

				
			}
			else
			{
				$con4=$unit-150;
				$unit4=$con4*40;

				$total=$unit4+3000;
			}


		}
		else
		{
			echo "Please Enter  Units";
		}
	?>

			<center><input type="text" name="total" value="<?php echo "₹$total";?>"></center>
</form>




</body>
</html>