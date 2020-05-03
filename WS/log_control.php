<?php


	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$pswd = $_POST['pswd']; 
		if($uname == 'root' && $pswd == '1234')
		{
			session_start();
			$_SESSION['uname'] = $uname;
			if(empty($_SESSION['token']))
			{
				$_SESSION['token'] = bin2hex(random_bytes(32));
			}

			header('Location: contact.html');

		}
		else
			header('Location: login.html');
	}	
?>
