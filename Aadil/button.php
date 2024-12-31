<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Button</title>
</head>
<body>
	<form method="POST">
		<button name="hello">Hello

				
		</button>
	</form>

/* This is a problem to button into button do not the setified this iner if condition this solution is bye button contdition is not include hello if condition*/

	<?php
			if (isset($_POST['hello'])) 
			{

				echo "<form method='POST'><button name='bye'> bye</button></form>";
				if (isset($_POST['bye'])) 
				{
						echo "HEllo";
				}
					
			}
			
	?>

</body>
</html>