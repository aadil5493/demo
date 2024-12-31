<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<style type="text/css">
		body{
			background: linear-gradient(to left,lightgreen,antiquewhite);
			text-align: center;
			font-family:Arial, Helvetica, sans-serif
		}
		div{
			background-color: white;
			box-shadow: darkgray  5px 5px ;
			border-radius: 10px;
			width:30%;
			margin-top:150px;
			height: 50vh;


		}
		h1{
			color:darkcyan;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		}
		.input{
			height: 25px;
			width: 80%;
			margin-top:10px;
			font-size: 20px;
			color: black;
			border-radius: 5px;
			margin-left:15px;
			
		}
		.input:hover{
			border:4px solid lightblue;
		}
		.submit{
			background-color:lightgreen;
			color:black;
			margin-top: 10px;	
			margin-bottom: 10px;
			height: 30px;
			margin-left:130%;
			width: 50px;
			font-family:cursive;
			font-size:15px;
			border-radius:5px;

		}
		.submit:hover{
			background-color: red;
			border-radius: 3px;
			font-family:cursive;
		}
		label
		{
			font-size: 20px;

		}
	</style>
</head>
<body>
	<center>
<div>
	<center>
	<header>
		<br>
		<hr>
		<h1>Login</h1>
		<hr>
	</header>
	<table>
		<br>
		<br>
		<form method="POST">
				<tr>
					<td><label>Email</td>
					<td><input type="email" name="email" placeholder="Enter Email Address" class="input" required></td>

				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="text" name="pass" class="input" maxlength="10" placeholder="Enter Password" required></td>
				</tr>	
				<tr>
					<td><input type="submit" value="Login" name="login" class="submit"></td>
				</tr>
		</form>
	</table>
	</center>
</div>
</center>
</body>
</html>