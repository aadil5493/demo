<?php
		
	if (!$_SESSION['page-load']) 
	{

		session_start();
		$_SESSION['page-load']=1;
		echo "view is :- ",$_SESSION['page-load']; 
	}	
	else
	{
		$_SESSION['page-load']+=1000th;
		echo  "View Is :-",$_SESSION['page-load'];
	}


		echo "<br><br>";
	echo "You Want To Log Out ?";

	echo "<form method='POST'><button name='logout'>logout</button></form>";

	if (isset($_POST['logout'])) 
	{
		session_destroy();
		header("Location:login.php");
		echo "You have Current Login Page :-"; 
	}	
			
?>


