<?php include 'head.php'; ?>
  <body style= 'background-color: #6B8E23;'>
	  <div class="container-fluid" style= 'background-color: #6B8E23; width:80%; margin-top:30px'>
		<div class="page-header">
			<h1><font color=white>DETAILED ITINERARY</font></h1>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Itinerary Details</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="control-label col-sm-6" for="itineraryID">Itinerary ID</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="itineraryID">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-6" for="accommodationType">Type</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="accommodationType">
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-6" for="type">Accommodation Type</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="type">
                                        </div>
                                    </div>
                                    <div class="form-group">
										<label class="control-label col-sm-6" for="mealPlan">Meal Plan</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="mealPlan">
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-sm-6" for="noOfAdults">No. Of Adults</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="noOfAdults">
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-6" for="childrenBelow2">Children Below 2</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="childrenBelow2">
                                        </div>
                                    </div>
                                    <div class="form-group">
										<label class="control-label col-sm-6" for="children2-12">Children 2-12</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="children2-12">
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6">
								<form class="form-horizontal" role="form">
										<div class="form-group">
                                            <label class="control-label col-sm-6" for="arrivalDate">Arrival Date</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="arrivalDate">
                                            </div>
										</div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-6" for="departureDate">Departure Date</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="departureDate">
                                            </div>
										</div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-6" for="lastModifiedDate">Last Modified Date</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="lastModifiedDate">
                                            </div>
                                        </div>
										<div class="form-group">
											<label class="control-label col-sm-6" for="lastModifiedTime">Last Modified Time</label>
											<div class="col-sm-6">
												<input type="time" class="form-control" id="lastModifiedTime">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-6" for="rooms">Rooms</label>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-12">
														<form class="form-horizontal" role="form">
															<div class="form-group">
																<label class="control-label col-sm-4" for="single">Single</label>
																<div class="col-sm-8">
																	<input type="number" class="form-control" id="single">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-sm-4" for="double">Double</label>
																<div class="col-sm-8">
																	<input type="number" class="form-control" id="double">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-sm-4" for="triple">Triple</label>
																<div class="col-sm-8">
																	<input type="number" class="form-control" id="triple">
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-primary">
						<div class="panel-heading">Route Map</div>
						<div class="panel-body">
							<div class="panel panel-default" style="height: 400px">
							</div>
						</div>
					</div>
					
					<div class="panel panel-primary">
						<div class="panel-heading">Activity Plan</div>
						<div class="panel-body">
							<table class="table table-bordered">
							<thead>
								<tr>
									<th width="75" align="center">Day</th>
									<th width="200" align="center">Activity</th>
									<th width="75" align="center">Location</th>
									<th width="75" align="center">Time</th>
								</tr>
							</thead>
						</table>
						</div>
					</div>
					
					<div class="panel panel-primary">
						<div class="panel-heading">Accommodation Plan</div>
						<div class="panel-body">
							<table class="table table-bordered">
							  <thead>
								  <tr>
									  <th width="50" align="center">Day</th>
									  <th width="100" align="center">Accommodation Place</th>
									  <th width="100" align="center">City</th>
									  <th width="125" align="center">Address</th>
								  </tr>
							  </thead>
						  </table>
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">Cost Details</div>
						<div class="panel-body">
							<table class="table table-bordered">
							  <thead>
								  <tr>
									  <th width="100" align="center">Cost Type</th>
									  <th width="50" align="center">Amount</th>
								  </tr>
							  </thead>
							</table>
							<div class="col-md-4">
								<form="form-horizontal" role="form">
									<div class="form-group">
										<label class="control-label col-sm-4" for="totalCost">Total Cost (Rs)</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" id="totalCost" disabled>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					
					<a href="#" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-ok-circle"></span> Confirm Itinerary
					</a>
					<a href="#" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-wrench"></span> Modify Itinerary
					</a>
					<a href="#" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-print"></span> Print
					</a>
					<a href="#" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-backward"></span> Back
					</a>
					
				</div>
			</div>
		</div>
	  </div>
	  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>


