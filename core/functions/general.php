<?php
	function sanitize($data){
		require 'C:\wamp\www\PHP\core\database\connect.php';
		return mysqli_real_escape_string($con,$data);
	}
?>