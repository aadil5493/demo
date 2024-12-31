<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Age Calculator</title>
</head>
<body>
	<?php echo "<h1> <center>Age calculator</h1></center> ";?>
	<form method="POST">
		<label>DOB</label>
		<input type="text" name="n1">
		<br>
		<br>
		<input type="submit" name="sub">
		<br>
	</form>

	<?php
			if (isset($_POST['sub'])) 
			{
						

				$dob=$_POST['n1'];
				$dob1=explode('/', $dob);
				
				$sysdate=explode('-',date('d-m-y'));
				$year=$sysdate[2]-$dob1[2];
				echo "<br>Year is $year";



				$month=$sysdate[1]-$dob1[1];
				echo "<br>Month is :$month";


				$day=$sysdate[0]-$dob1[0];
				echo "<br>day is :$day";

					echo " <br><br><br>";

				echo "<h1 style='color:red'><center>You have $year year  due to $month Month and $day Day  only</h1></center>";
			}
	?>


</body>
</html>