<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registrion </title>
</head>
<body>
	<form>
				<input type="text" name="n1" placeholder="Enter UserName">
				<input type="text" name="n2" placeholder="Enter Password">
				<br>
				<br>
				<input type="submit" name="sub">
	</form>

	<?php

		if(isset($_GET['sub']))
		{
			$name='aadilkhokhar380@gmail.com';
			$pass='Aadil1097';

			$name1=$_GET['n1'];
			$pass2=$_GET['n2'];

				if($name==$name1 && $pass2==$pass)
				{
					header("demo.php");
					exit();	
				}
				else
				{
					echo "<p style='color:red'" ;
					echo "Please Check Password Or username ";
					echo "</p>";
				}
		}
	?>

</body>
</html>