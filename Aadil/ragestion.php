<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Regestion Form </title>
	<style type="text/css">
		body{
			background: linear-gradient(to left,lightgreen,antiquewhite);
			font-family:Arial, Helvetica, sans-serif

		}
		div
		{
			background-color: white;
			box-shadow: darkgray  5px 5px ;
			border-radius: 10px;
			width:500px;
			height: 90vh;

		}
		h1{
			color: darkcyan;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
			text-align: center;
		}
		.input{
			height: 25px;
			width: 80%;
			margin-top:10px;
			font-size: 15px;
			color: black;
			margin-left: 15px;
			
		}
		.input:hover{
			border:5px solid lightblue;
		}
		.box{
			margin-top: 10px;
		}
		.submit{
			background-color:lightgreen;
			margin-top: 10px;	
			margin-bottom: 10px;
			height: 30px;
			width: 30%;
			margin-left:30%;

			
		}
		.submit:hover{
			background-color: green;
			border-radius: 3px;
		}
		label{
			font-size: 20px;

		}
		
		
	</style>
</head>
<body>
	<center>
	<div>
	
		<br>
		<hr>
		<h1>Registration</h1>
		<hr>
		<table>
				<form>
					<tr>
							<td><label>Username</label></td>
							<td><input type="text" name="username" placeholder="Enter username" class="input"></td>
					</tr>
							
					<tr>
						<td><label>password</label></td>
						<td><input type="text" name="password" placeholder="Enter Password" class="input"></td>
					</tr>
					<tr>
							<td><label>Conform Password</label></td>
							<td><input type="text" name="cpassword" placeholder="Conform password" class="input"></td>	
					</tr>


					<tr>
						<td><label> Phone Number</label></td>
						<td><input type="tel" name="phone" maxlength="10" accept="[0-9][10]" class="input" placeholder="Enter phone Number">
								</td>

					</tr>
					<tr>
						<td><label>Email Address</label></td>
						<td><input type="email" name="email" placeholder="Enter Your Email Address"class="input"></td>			
					</tr>

					<tr>
						<td><label>Address</label></td>
						<td><textarea cols="17" rows="3" name="address" class="input" placeholder="Enter Your Address"></textarea>
					</tr>

					<tr>
						<td><label>DOB</label></td>
							<td><input type="date" name="dob" class="input"></td>
					</tr>

					<tr>
						<td><label>Deparment</label></td>
						<td>
							<select name="dep" class="input">
								<option>CE</option>
								<option>ME</option>
								<option>B.TECH</option>
								<option>M.TECH</option>	
							</select>
						</td>
					</tr>

					<tr>
						<td ><label>Gender</label></td>
						<td><label> Male</label><input type="radio" name="male" value="Male" class="box"> 
						<label>Female</label><input type="radio" name="male" value="Female" class="box">
					</tr>

					<tr>
						<td>
							<label>Language</label>

						</td>
						<td>
							<label>Java</label>
							<input type="checkbox" name="java" class="box">
							<label>C</label>
							<input type="checkbox" name="C">
							<label>Python</label>
							<input type="checkbox" name="Python">
							<label>C#</label>
							<input type="checkbox" name="C#">

						</td>
					</tr>
						
						<tr><td colspan="2"><input type="submit" name="sub" class="submit"></td></tr>	
			</form>	
	</table>
</div>
</center>
	<?php
			if (isset($_POST['sub'])) {
				// code...
			}


	?>
</body>
</html>