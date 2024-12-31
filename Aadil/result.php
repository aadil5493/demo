<!DOCTYPE html> 
<html> 
<head>
<title>Result</title>
</head>
<body bgcolor="lightblue"> 
	<form>
	<center> 
	<table border="1" cellspacing="5" bgcolor="white"> 

		<caption><b>Input Marks</b></caption> 
		<br>
		<tr> 
			<th rowspan="2">Name</th> 
			<th colspan="4">Score</th> 

		</tr> 
		<tr> 
			<th>Hindi</th> 
			<th>English</th> 
			<th>Math</th> 
			<th>C Programming</th> 
		</tr> 
		<tr> 
			<td><input type="text"  name="t1"></td> 
			<td><input type="text"  name="t2"></td> 
			<td><input type="text"  name="t3"></td> 
			<td><input type="text"  name="t4"></td> 
			<td><input type="text"  name="t5"></td> 
		</tr> 
		<tr> 
			<th colspan="5" height="30"> 
			<input type="submit" value="Display" name="dis"></th> 
		</tr>	 
	</table>
	<?php 
		$name=$_GET['t1'];
		$hindi=$_GET['t2'];
		$English=$_GET['t3'];
		$math=$_GET['t4'];
		$c=$_GET['t5'];

		if(isset($_GET['dis']))
		{
			$total=$hindi+$English+$math+$c;

			 $avg=$total/4;


			$per=$total*100/400;

			
			if($per>=91)
			{
				$grad='A';
			}
			else if($per>=81)
			{
				$grad='B';
			}
			else if($per>=71)
			{
				$grad='C';			
			}
			else if($per>=61)
			{
				$grad='D';
			}
			else
			{
				$grad='Fail';
			}

		}
	?>
	  
	<br> 
	<table border="1" cellspacing="5" bgcolor="white"
		height="100" width="500" cellpadding="5" id="TableScore"> 
		<caption><b>Student Data</b></caption> 
		<tr> 
			<th width="180"><?php echo "$name"?></th> 
			<th><?php echo "persentage:-$per";?></th> 
			<th><?php echo "Total:-$total";?></th> 
			<th><?php echo "Aavrage:-$avg";?></th> 
			<th width="150"><?php echo "Grad:-$grad";?></th> 

		</tr> 
		
	</table> 
	</center> 
	</form>

	
</body> 
</html>
