<?php
	session_start();
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$csrf_token = $_POST['csrf_token'];
	
	echo "<center><h1> HI $firstname $lastname</h1></center><br/>";
	if($csrf_token == $_SESSION['token'])
	{
		echo "<center><h1>CSRF token is matched</h1></center>";
		echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='images/happy.png' alt='icon' />";
	}
	else
	{
		echo "<center><h1>CSRF token is not matched</h1></center>";
		echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='images/sad.png' alt='icon' />";

	}

?>
