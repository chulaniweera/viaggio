<?php
	function logged_in(){
		return (isset($_SESSION['user_id'])) ? true : false ;
	}

	function user_data($user_id){
		require '\..\database\connect.php';
		/*$data = array();
		$user_id = (int)$user_id;

		$func_num_args = func_num_args();
		$func_get_args = func_get_args();

		if ($func_num_args > 1) {
			unset($func_get_args[0]);

			$fields = '`'.implode('`,`',$func_get_args).'`';*/
		$data = (mysqli_fetch_assoc(mysqli_query($con , "SELECT 'username' FROM login WHERE ID = '$user_id'")));
		return $data;
	}

	function user_exists($username){
		require '\..\database\connect.php';
		$username = sanitize($username);
		$sql = "SELECT * FROM login WHERE username = '$username'";
		$query = mysqli_query($con, $sql);
		$rslt = mysqli_num_rows($query);
		if($rslt === 1)
			return true;
		else
			return false;
	}

	function email_exists($email){
		require '\..\database\connect.php';
		$email = sanitize($email);
		$sql = "SELECT * FROM login WHERE email = '$email'";
		$query = mysqli_query($con, $sql);
		$rslt = mysqli_num_rows($query);
		if($rslt === 1)
			return true;
		else
			return false;
	}

	function user_id_from_username($username){
		require '\..\database\connect.php';
		$username = sanitize($username);
		return (mysqli_fetch_assoc(mysqli_query($con , "SELECT 'ID' FROM login WHERE username = '$username'"))['ID']);
	}

	function login($username,$password){
		require '\..\database\connect.php';
		$user_id = user_id_from_username($username);

		$username = sanitize($username);
		$password = md5($password);

		$sql = "SELECT ID FROM login WHERE username = '$username' AND password = '$password'";
		$query = mysqli_query($con, $sql);
		$rslt = mysqli_num_rows($query);
		//echo $user_id;
		if($rslt === 1){
			return $user_id;
			
		}
		else{
			return false;}
	}
?>