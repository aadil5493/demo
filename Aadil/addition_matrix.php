<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<?php
			for ($i=0; $i < 2; $i++) 
			{ 
				for ($j=0; $j < 2; $j++) 
				{
					echo "<input type='text' name='mat1[$i][$j]' placeholder='enter element'> <br>";
				}
			}
			echo "<br>";
			echo "<br>";
			echo "<br>";
			for ($i=0; $i < 2; $i++) 
			{ 
				for ($j=0; $j < 2; $j++) 
				{
					echo "<input type='text' name='mat2[$i][$j]' placeholder='enter element'> <br>";
				}
			}
			echo "<br>";
			echo "<input type='submit' name='sub'>";	
		?>
	</form>
	<?php
		if(isset($_GET['sub']))
		{
			$mat1=$_GET['mat1'];
			$mat2=$_GET['mat2'];
			$sum=array();
			for ($i=0; $i < 2; $i++) 
			{ 
				for ($j=0; $j < 2; $j++) 
				{ 
					$sum[$i][$j]=$mat1[$i][$j]+$mat2[$i][$j];
				}
			}

			for ($i=0; $i < 2; $i++) 
			{ 
				for ($j=0; $j < 2; $j++) 
				{ 
					echo $sum[$i][$j]. "    ";
				}
				echo "<br>";
			}
		}

	?>

</body>
</html>