<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>matrix Addtion</title>
</head>
<body>

	<header>
		<h1><center>Matrix Addtion</center></h1>
	</header>
	<form>

		<?php
			echo "Enter First Matrix:-<br><br>";

			for ($i=0; $i < 3; $i++) 
			{ 
				for ($j=0; $j < 3; $j++) 
				{ 
					echo "<input type='text' name='math1[$i][$j]' placeholder='A[$i][$j]'>"."   ";
				}
				echo "<br>";
			}


			echo "<br><br>Enter Secound Matrix:-<br><br>";
			
			for ($i=0; $i < 3; $i++) 
			{ 
				for ($j=0; $j < 3; $j++) 
				{ 
					echo "<input type='text' name='math2[$i][$j]' placeholder='A[$i][$j]'>"."  ";
				}
				echo "<br>";
			}
				echo "<bt>";
				echo "<br>";
				echo "<br>";
			echo "<input type='submit' name='sub' value='calculate'>";



		?>
		
	</form>


	<?php

		if(isset($_GET['sub']))
		{
			$math1=$_GET['math1'];
			$math2=$_GET['math2'];


			$a = array();

			for ($i=0; $i < 3; $i++) 
			{ 
					for ($j=0; $j <3 ; $j++) 
					{ 
							$a[$i][$j]=$math1[$i][$j]+$math2[$i][$j];

					}
			}

			echo "<br><br><h3>Result Matrix Addtion:-</h3><br>";


			for ($i=0; $i < 3; $i++) 
			{		
				echo "<table border='1' height='50px' width='100px'>";
				echo "<tr>";
				for ($j=0; $j < 3; $j++) 
				{ 
					echo "<td>";

					echo $a[$i][$j];
					echo " </td>";
				}

				echo "</tr>";

			}

			echo "</table>";
		}
		else
		{
			echo "<br><br><br>=Please Enter Matrix And After Seen Result Matrix";
		}



	?>



</body>
</html>