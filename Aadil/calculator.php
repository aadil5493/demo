<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;

		}
		body
		{
			background-color:white;
		}
		hr
		{
			width: 250px;

		}
		.Header
		{
			background-color: ghostwhite;
			height: 35	px;
			border-radius: 20px;
			text-align: center;
			padding: 25px;
			font-family: cursive;
			font-size: 30px;

		}
		.input
		{
			height: 50px;
			width: 25%;
			text-align: center;
			border-radius: 5px;
			font-family: cursive;
			font-size: 1.5em;
			background: linear-gradient(skyblue,lightgreen);


		}
		#input
		{
			height: 50px;
			width: 25%;
			text-align: center;
			border-radius: 5px;
			margin: 50px;
			font-family: cursive;
			font-size: 1.5em;
			background: linear-gradient(skyblue,lightgreen);



		}
		.button
		{
			background-color: lightskyblue;
			height: 30px;
			width: 5%;
			text-align: center;
			text-shadow: 10px;
			border-radius: 5px 5px 5px 5px ;
			font-family: cursive;
			font-size: 1em;


		}
		input:hover
		{
			border-bottom:10%;
			border-color: skyblue;
			border: solid black;
		}
	</style>
</head>
<body>
	<header>

			<div class="Header">
				<h3>Simple Calculator</h3>		
			</div>

		
		<div>

			<br>
			<br>
			<br>
			<br>
			<br>

			<form>


				<center><input type="text" name="t1" placeholder="Enter First  Number" class="input">

				<input type="text" name="t2" placeholder="Enter Secound Number" class="input"></center>
				<br>
					<br>

				<center><input type="submit" name="s1" value="+" class="button">
				<input type="submit" name="s2" value="-" class="button">
				<input type="submit" name="s3" value="*" class="button">
				<input type="submit" name="s4" value="/" class="button">
				<input type="submit" name="s5" value="%" class="button"></center>
			</form>

				<?php
					$sum;
					
						$a=$_GET['t1'];
						$b=$_GET['t2'];
						
						if(isset($_GET['s1']))
						{
							 $sum=$a+$b;

						}
						else if(isset($_GET['s2']))
						{
							 $sum=$a-$b;

						}
						else if(isset($_GET['s3']))
						{
							 $sum=$a*$b;

						}
						else if(isset($_GET['s4']))
						{
							 $sum=$a/$b;

						}
						else if(isset($_GET['s5']))
						{
							 $sum=$a%$b;

						}
						else
						{
						echo "Please Enter Two Numbers";
						}

						




				
					

			?>

<br>	
<form>
	<center><input type="text" name="sum" id="input" value="<?php echo $sum ?>"></center>

			</form>


			
			
		</div>



	</header>

</body>
</html>