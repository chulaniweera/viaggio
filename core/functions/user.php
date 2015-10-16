<?php
	function logged_in(){
		return (isset($_SESSION['user_id'])) ? true : false ;
	}

	function add_new_tourist($registration_data, $user_data){
		require '\..\database\connect.php';
		
		extract($registration_data);
		
		
		echo "$Title,$First_Name,$Last_Name,$NIC,$Passport_ID,$Address,$City,$Country,$Contact1,$Contact2";
		
		$id= '00003';	
		$sql= "INSERT INTO tourist (Tourist_ID,Title,First_Name,Last_Name,NIC,Passport_ID,Address,City,Country,Contact1,Contact2) VALUES ('$id','$Title','$First_Name','$Last_Name','$NIC','$Passport_ID','$Address','$City','$Country','$Contact1','$Contact2')";
		//$sql= "INSERT INTO tourist (Tourist_ID,Title,First_Name,Last_Name,NIC,Passport_Id,Address,City,Country,Contact1,Contact2) VALUES ('00006','Mr','Dineth','Weerathunga','935290559V',NULL,NULL,'Galle','Sri Lanka','0912223135','0772894515')";
		$query= mysqli_query($con,$sql);
		
		if ($query === TRUE) {
			echo $sql;
			
			echo "Registration to torist table Successfull";
			//$sql = "INSERT INTO login (ID,username,e_mail,password) VALUES ('00006','chulaniweera','ddbw41@gmail.com',password('12345678'))";
			extract($user_data);
			echo "$username,$email,$password";
			
			$sql = "INSERT INTO login (ID,username,e_mail,password) VALUES ('$id','$username','$email',password('$password'))";
			$query= mysqli_query($con, $sql);
			echo $sql;
			
			if($query ===TRUE){
				echo "Successfully added to the user table";
			}else{
				echo "Process failed";
			}
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	
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
