<?php
	
	$servername='localhost';
	$username='root';
	$password="";
	$database='aadil';

	$conn=mysqli_connect($servername,$username,$password,$database);
	if ($conn)
	{
		echo "Database connection is done";
	}
	else
	{
		echo "databse connection is not Done ";
	}

	$db='create table aadil
	(
		std_id int ,
		std_name varchar(50))';

	$final=mysqli_query($conn,$db);

	if ($final)
	{
		echo "<br>Table is  Create";
	}
	else
	{
		echo "<br>Table Is Not Create";
	}



?>