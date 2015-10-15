<?php
	$con = mysqli_connect("localhost","root") or die("ERROR");
	mysqli_select_db($con,"my_db") or die("NO DB");
?>