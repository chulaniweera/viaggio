<?php include 'head.php'; ?>
	  <div class="container-fluid" style= 'background-color: #6B8E23; width:80%; margin-top:30px'>
		<div class="page-header">
			<h1><font color=white>PROFILE SETTINGS</font></h1>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				
				<div class="row">
					<div class="col-sm-8">
				
						<div class="panel panel-primary">
							<div class="panel-heading">Personal Details</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="control-label col-sm-3" for="title">Title</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="title" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="firstName">First Name</label>
										<div class="col-sm-7"> 
											<input type="text" class="form-control" id="firstName">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="lastName">Last Name</label>
										<div class="col-sm-7"> 
											<input type="text" class="form-control" id="lastName">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="address">Address</label>
										<div class="col-sm-7"> 
											<input type="text" class="form-control" id="address">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="city">City</label>
										<div class="col-sm-7"> 
											<input type="text" class="form-control" id="city">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="country">Country</label>
										<div class="col-sm-7">
											<div class="dropdown" style="width: 200px;">
												<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Country
													<span class="caret"></span>
												</button>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="nic">NIC</label>
										<div class="col-sm-7"> 
											<input type="text" class="form-control" id="nic">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="passportId">Passport ID</label>
										<div class="col-sm-7"> 
											<input type="text" class="form-control" id="passportID">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="email">Email</label>
										<div class="col-sm-7"> 
											<input type="email" class="form-control" id="email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="contactNo">Contact Number</label>
										<div class="col-sm-7"> 
											<input type="tel" class="form-control" id="contactNo1">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="contactNo"></label>
										<div class="col-sm-7"> 
											<input type="tel" class="form-control" id="contactNo2">
										</div>
									</div>
								</form>
							</div>
						</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">Profile Picture</div>
								<div class="panel-body">
									<div class="panel panel-default" style="height: 350px">
									</div>
									<a href="#" class="btn btn-primary pull-right">
										<span class="glyphicon glyphicon-plus"></span> Add new
									</a>
								</div>
							</div>
						</div>
					</div>
				
					<div class= "panel panel-primary">
						<div class="panel-heading">Account Details</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="control-label col-sm-3" for="userName">User Name</label>
									<div class="col-sm-7"> 
										<input type="text" class="form-control" id="userName">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="password">Password</label>
									<div class="col-sm-7"> 
										<input type="password" class="form-control" id="password">
									</div>
								</div>
								<a href="#" class="btn btn-primary pull-right">
									<span class="glyphicon glyphicon-user"></span> Deactivate Account
								</a>
								<a href="#" class="btn btn-primary pull-right">
									<span class="glyphicon glyphicon-cog"></span> Change Account Details
								</a>
							</form>
						</div>
					</div>
					<a href="#" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-folder-close"></span> Save
					</a>
					<button type="button" class="btn btn-primary pull-right btn-margin-right">Cancel</button>
					
			</div>
		</div>
	</div>    
  </body>
</html>

