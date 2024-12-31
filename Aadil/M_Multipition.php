<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Matrix Addtion</title>
</head>
<body>

	<form>
		<h2> Enter First Matrix</h2>
		<?php

			for ($i=0; $i <3 ; $i++)
			 { 
				
				for ($j=0; $j <3 ; $j++)
				{ 

					echo "<input type='text' name='math1[$i][$j]' placeholder='A[$i][$j]'>" ;
				}
				echo "<br>";
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo " <h2> Enter Secound Matrix</h2>";

			for ($i=0; $i <3 ; $i++) 
			{ 
				
				for ($j=0; $j <3 ; $j++)
				 { 

		echo "<input type='text' name='math2[$i][$j]' placeholder='b[$i][$j]'>";
				}
				echo "<br>";
			}
			echo "<br>";
			echo "<br>";
			echo "<br>";


			echo " <input type='submit' name='sub' value='claculate'>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
		?>
	</form>

	<?php

		if(isset($_GET['sub']))
		{
			$math1=$_GET['math1'];
			$math2=$_GET['math2'];

			echo "Entered First matrix:-<br><br>";

			for ($i=0; $i <3 ; $i++) 
			{ 
				echo "<table border='1'>";


				echo "<tr>";

				for ($j=0; $j <3 ; $j++)
				{ 
					echo "<td>".$math1[$i][$j]."</td> ";						
				}
				echo "</tr>";
			}
			echo "</table>";


			echo "<br><br>Entered Secound Matrix:-<br><br>";

			for ($i=0; $i <3 ; $i++) 
			{ 
				echo "<table border='1'>";

				echo "<tr>";
				for ($j=0; $j <3 ; $j++)
				{ 

					echo "<td>".$math2[$i][$j]."</td> ";					
				}

				echo "</tr>";

			}

			echo "</table>";


			$r=array();


			
			for ($i=0; $i <3 ; $i++)
			{ 		

				for ($j=0; $j < 3; $j++) 
				{ 	
					$r[$i][$j]=0;
					for ($k=0; $k <3 ; $k++)
					{ 
						$r[$i][$j]+=$math1[$i][$k]*$math2[$k][$j];
					}
				}
			}

			echo "<br>Matrix Multipition Is :-<br><br><br>";
			for ($i=0; $i <3 ; $i++) 
			{ 
				echo "<table border='1.5	'>";
	
				echo "<tr>";
				for ($j=0; $j <3 ; $j++)
				{ 
					echo "<td>";
					echo $r[$i][$j]."</td>";					
				}
				echo "</tr>";
			}

				echo "</table>";

		}
	
	?>

</body>
</html>