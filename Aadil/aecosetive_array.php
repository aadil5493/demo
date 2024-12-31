<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Details</title>
</head>
<body>

		<header>
			<h1> <center> Employee Detais</center></h1>
		</header>

	<form>
		<label>Emp_id </label>
		<input type="text" name="e_id"><br><br>
		<br>
		<label>Employee First Name </label>
		<input type="text" name="emp_f_name"><br><br>
		<br>
		<label>Emp_last Name </label>
		<input type="text" name="emp_l_name"><br><br>
		<br>
		<label>Emp_Phone_No </label>
		<input type="text" name="e_no"><br><br>
		<br>
		<label>Emp_Adderss</label>
		<input type="text" name="e_address"><br><br>
		<br>
		<input type="submit" name="sub">

	</form>

	<?php

	if (isset($_GET['sub']))
	 {
			
		$a = array('Employee Id is'=>$b=$_GET['e_id'],'Employee First name:-'=>$c=$_GET['emp_f_name'],'Employee last  name:-'=>$d=$_GET['emp_l_name'],'Employee Phone Number :-'=>$e=$_GET['e_no'] ,'Address:-'=>$f=$_GET['e_address']);


			foreach ($a as $key => $value)
			{
				echo "<br>".$key." ".$value."<br>";
			}
	}
	?>

</body>
</html>


		