<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="e1" placeholder="enter id"><br><br>
		<input type="text" name="e2" placeholder="enter frist name"><br><br>
		<input type="text" name="e3" placeholder="enter last name"><br><br>
		<input type="EMAIL" name="e4" placeholder="enter EMAIL"><br><br>
		<input type="text" name="e5" placeholder="enter ADDRESS"><br><br>
		<input type="text" name="e6" placeholder="enter CITY"><br><br>

		<input type="submit" name="s1"><br><br>
	</form>
	<?php
		if(isset($_GET['s1']))
		{
			$e1=$_GET['e1'];
			$e2=$_GET['e2'];
			$e3=$_GET['e3'];
			$e4=$_GET['e4'];
			$e5=$_GET['e5'];
			$e6=$_GET['e6'];

			$arr=array("E_ID"=>$e1,"E_first_name"=>$e2,"E_last_name"=>$e3,"EMAIL"=>$e4,"ADDRESS"=>$e5,"CITY"=>$e6 );

			foreach ($arr as $key => $value)
			{
				echo $key. "=>". $value ."<br>";
			}
		}
	?>
</body>
</html>