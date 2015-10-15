<?php include 'head.php'; ?>
	  <div class="container-fluid" style= 'background-color: #6B8E23; width:80%; margin-top:30px'>
		<div class="page-header">
			<h1><font color=white>ADD NEW HOTEL</font></h1>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				
				<div class="row">
					<div class="col-sm-8">
					
						<div class="panel panel-primary">
							<div class="panel-heading">Hotel Details</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="control-label col-sm-3" for="hotelName"> Hotel Name</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="hotelName">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="type"> Hotel Type</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="type">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="rate">Ratings</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="rate">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="address">Address</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="address">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="contactNo">Contact Number</label>
										<div class="col-sm-7">
											<input type="tel" class="form-control" id="contactNo">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="fax">Fax</label>
										<div class="col-sm-7">
											<input type="tel" class="form-control" id="fax">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="email">Email</label>
										<div class="col-sm-7">
											<input type="email" class="form-control" id="email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="description">Description</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="description">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="link">Link</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="link">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-primary">
							<div class="panel-heading">Hotel Picture</div>
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
				<button type="button" class="btn btn-primary pull-right btn-margin-right">Submit</button>
				<button type="button" class="btn btn-primary pull-right btn-margin-right">Cancel</button>
			
			</div>
		</div>
	  </div>
	  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
