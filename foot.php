<?php
	include_once 'core/init.php';
	if(logged_in() === true){
		include 'footerlogged.php';
	}
	else{
		include 'footer.php';
	}
?>