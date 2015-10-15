<?php

function add_new_tourist(){
	$title= $_POST['title'];
	$first_name= $_POST['firstName'];
	$last_name= $_POST['lastName'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	$country= $_POST['country'];
	$nic= $_POST['nic'];
	$passport_id= $_POST['passportId'];
	$email= $_POST['email'];
	$contactNo1= $_POST['contactNo1'];
	$contactNo2= $_POST['contactNo2'];
	$userName= $_POST['userName'];
	$password= $_POST['password'];
	
	if(empty($title or $first_Name or $last_name or $address or $country or $nic or $email)){
		echo "Enter valid details";
	}
	
	$query= "INSERT INTO tourist (title,firstName,lastName,address,city,country,nic,passportId,email,contactNo1,contactNo2) VALUES ('$title',$first_Name,$last_Name,$address,$city,$country,$nic,$passport_Id,$email,$contactNo1,$contactNo2)";
	
	$data=mysql_query($query) or die(mysql_error);
	
	if($data){
		echo "Registration to torist table Successfull";
		$query = "INSERT INTO user (name,email.password) VALUES ('$userName',$email, $password)";
		
		$data = mysql_query($query) or die (mysql_error);
		if ($data){
			echo "Successfully added to the user table";
		}else{
			echo "Process failed";
		}
		
	}else{
		echo "Invalid User";
	}
	
}

function check_user_validity(){
	$email= $_POST['email'];
	$userName= $_POST['userName'];
	$password= $_POST['password'];
	
	if(! empty ($email and $userName and $password){
		$query = "SELECT * FROM user WHERE email= '$email' & password= $password" or die (mysql_error);
		
		$row = mysql_fetch_array($query) or die(mysql_error);
		
		if(! $row){
			add_new_tourist();
		}else{
			echo "Already registered";
		}
	}
}


?>
