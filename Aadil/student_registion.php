<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Resistion</title>
  <style type="text/css">
    p{
      color: red;
      font-family: cursive;
      
    }
  </style>
</head>
<body>

  <?php

  echo "<form method='POST'>";
 echo " <input type='text' name='n1' placeholder='Enter username'>";
  echo "<input type='text' name='n2' placeholder='Enter Password'><br><br><br>";
  echo  " <input  type ='submit' name='sub'>";
  
  
        
     if (isset($_POST['sub'])) 
     {

        $name='aadilkhokhar380@gmail.com';
        $pass='Aadil1097';

       $name1=$_POST['n1'];
        $pass2=$_POST['n2'];
       
        if ($name==$name1 AND $pass==$pass2) 
        {
          header('Location:login.php');
          exit();
        }
        else
        {
          
          echo"<p> Password Or Usename is Wroung  </p>";
        }


     }

  ?>

  </form>

  

</body>
</html>