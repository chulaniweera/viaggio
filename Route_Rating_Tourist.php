<?php include 'head.php'; ?>
	  <div class="container-fluid" style= 'background-color: #6B8E23; width:80%; margin-top:30px'>
		<div class="page-header">
			<h1><font color=white>ROUTE RATING</font></h1>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Route Map</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="control-label col-sm-4" for="itineraryID">Itinerary ID</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="intineraryID">
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-5">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="control-label col-sm-4" for="routeID">Route ID</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="routeID">
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="panel panel-default" style="height: 300px">
						</div>
					</div>
				</div>
				
				<div class="panel panel-primary">
					<div class="panel-heading">Ratings</div>
					<div class="panel-body">
						<table class="table table-bordered">
							  <thead>
								  <tr>
									  <th width="100" align="center">Activity</th>
									  <th width="50" align="center">Rate (
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										)
									  </th>
									  <th width="100" align="center">Remarks</th>
								  </tr>
							  </thead>
						  </table>
					</div>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-sm-3" for="overallRate">Overall Rate (								
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							) </label>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="overallRate">
							</div>
						</div>
					</form>
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

