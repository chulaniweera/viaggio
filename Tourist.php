<?php
//include 'core/init.php';

function add_new_tourist(){
	require '\..\database\connect.php';
	
	$title= $_POST['title'];
	$first_name= $_POST['firstName'];
	$last_name= $_POST['lastName'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	$country= $_POST['country'];
	$nic= $_POST['nic'];
	$passport_id= $_POST['passportId'];
	$email= $_POST['email'];
	$contact1= $_POST['contactNo1'];
	$contact2= $_POST['contactNo2'];
	$userName= $_POST['userName'];
	$password= $_POST['password'];
	
	if(empty($title or $first_Name or $last_name or $address or $country or $nic or $email)){
		echo "Enter valid details";
	}
	
	//$sql= "INSERT INTO tourist (Tourist_ID,Title,First_Name,Last_Name,NIC,Passport_Id,Address,City,Country,Contact1,Contact2) VALUES ('001','$title',$first_Name,$last_Name,$nic,$passport_Id,$address,$city,$country,$contact1,$contact2)";
	$sql= "INSERT INTO tourist (Tourist_ID,Title,First_Name,Last_Name,NIC,Passport_Id,Address,City,Country,Contact1,Contact2) VALUES ('00006','Mr','Dineth','Weerathunga','935290559V',NULL,NULL,'Galle','Sri Lanka','0912223135','0772894515')";
	$query= mysql_query($sql);
	
	if ($query === TRUE) {
		
		echo "Registration to torist table Successfull";
		$sql = "INSERT INTO login (ID,username,e_mail,password) VALUES ('00006','chulaniweera','ddbw41@gmail.com',password('12345678'))";
		
		//$sql = "INSERT INTO login (ID,username,e_mail,password) VALUES ('00006','$userName','$email',password('password'))";
		
		if($query ===TRUE){
			echo "Successfully added to the user table";
		}else{
			echo "Process failed";
		}
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
	
}

/*function check_user_validity(){
	echo "Test";
	include '\..\database\connect.php';
	
	$email= $_POST['email'];
	$userName= $_POST['userName'];
	$password= $_POST['password'];
	
	if(! empty ($email and $userName and $password)){
		//$sql = "SELECT * FROM user WHERE email= '$email' & password= '$password'";
		$sql = "SELECT * FROM user WHERE email= 'ddbw41@gmail.com' & password= '12345678'";
		
		$query = mysql_query($sql);
		$result= mysql_num_rows($query);
		
		if($result===1){
			echo "Already registered";
		}else{
			add_new_tourist();
			
		}
	}
}*/


?>
