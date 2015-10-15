<?php include 'head.php'; ?>
	  <div class="container-fluid" style= 'background-color: #6B8E23; width:80%; margin-top:30px'>
		<div class="page-header">
			<h1><font color=white>VIEW ITINERARIES</font></h1>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Search Details</div>
					<div class="panel-body">
						<form class="form-inline" role="form">
							<div class="form-group">
								<label class="control-label col-sm-5" for="itineraryID">Itinerary ID</label>
								<div class="col-sm-5">
									<div class="dropdown">
										<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Itinerary ID
											<span class="caret"></span>
										</button>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-5" for="arrivalDate">Arrival Date</label>
								<div class="col-sm-4">
									<input type="date" class="form-control" id="arrivalDate">
								</div>
							</div>
							<a href="#" class="btn btn-primary pull-right">
								<span class="glyphicon glyphicon-search"></span> Search
							</a>
						</form>
					</div>
				</div>
				
				<div class="panel panel-primary">
					<div class="panel-heading">Itinerary Details</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="50" align="center">Itinerary ID</th>
									<th width="80" align="center">Arrival Date</th>
									<th width="50" align="center">Departure Date</th>
									<th width="150" align="center">Type</th>
									<th width="70" align="center">Route ID</th>
								  </tr>
							 </thead>
						 </table>
						 <a href="#" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-zoom-in"></span> View Itinerary
						</a>
						 <a href="#" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-remove-circle"></span> Cancel Itinerary
						</a>
					</div>
				</div>
				
				<button type="button" class="btn btn-primary pull-right btn-margin-right">Cancel</button>
					
			</div>
		</div>
  </body>
</html>

