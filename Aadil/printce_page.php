<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <form method="POST"  class="form">
           
            <div class="form-group">
                <label for="user"> Email</label><br><br>
                <input type="email" id="email" name="email" required>

            </div>
           
            <div class="form-group">
                <label for="password">Password</label><br><br>
                <input type="text" id="password" name="password"   required>
            </div>
            
            <div class="form-group">
                <center><button type="submit" name="sub">Submit</center></button>
            </div>

            <h6>If you Don't Have A Acount Please<a href="Regesrtastion.php"> Registration</a></h6>
        </form>

        

</body>
</html>


<?php  
$servername= "localhost";
$username= "root";
$password="";
$database="prince";

	$con=mysqli_connect($servername,$username,$password,$database);
	 
   if (isset($_POST['sub']))
    {  
       
        
      $email=$_POST['email'];
      $password=$_POST['password'];
      $q1="SELECT * FROM register_master WHERE email='$email' and password='$password'";
      $q2=mysqli_query($con,$q1);

# only view your understading 

    $a=mysqli_fetch_assoc($q2);
    echo $a['email'];
    echo $a['password'];
    $row=mysqli_num_rows($q2);
      if ($row>0)
      {
            session_start();
            $_SESSION['email']=$email;
            header("location:welcomepage.php"); 
    }
    else{
        echo "Email id Or password Worung";
    } 
      
 }   
?>