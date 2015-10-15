<?php
	include_once 'core/init.php';
	if(logged_in() === true){
		include 'headerlogged.php';
	}
	else{
		include 'header.php';
	}
?>