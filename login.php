<?php
	include 'core/init.php';

	if (empty($_POST === false)) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) === true || empty($password) === true){
			$errors = "Please enter a username and a password";
		}
		elseif (user_exists($username) === false) {
			$errors = "User doesn/'/t exists";
		}
		else{
			$login = login($username, $password);
			if($login === false){
				$errors = "That username or password is incorrect";
			}
			else{
				$_SESSION['user_id'] = $login;
				$_SESSION['name']=$username;// create a session for user name to ;
				header('Location: Create_Itinerary.php');
				exit();
			}
		}

		echo "<script type='text/javascript'>alert('$errors');</script>";
		//echo $errors;
		//header('Location: viaggio.php');
	}
?>