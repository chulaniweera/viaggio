<html>
	<head>
		<title>Viaggio</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/main.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	  	<?php require_once 'core/init.php'; ?>	  	
	</head>
	<body background="b6.jpg">
		<nav class="navbar navbar-inverse navbar-fixed-top">
	  		<div class="container">
	    		<div class="navbar-header">
	    			<a class="navbar-brand" href="#">
	            		<img style="max-width:140px; margin-top: -25px;" src="v.png" alt="">
	        		</a>
	      		<a class="navbar-brand" href="homelogged.php">Viaggio</a>
	    		</div>
			    <div>
			      <ul class="nav navbar-nav">
			        <li><a href="Create_Itinerary.php">Create Itinerary</a></li>
			        <li><a href="#">Hotels</a></li> 
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'];?><span class="caret"></span></a>
                <ul class="dropdown-menu" style="background-color:#c0174f">
                  <li><a href="Profile_Settings_Tourist.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                  <li><a href="View_Itineraries_Tourist.php"><span class="glyphicon glyphicon-folder-open"></span> View Past Itenaries</a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                </ul>
              </li>
			      </ul>
			    </div>
			</div>
		</nav>