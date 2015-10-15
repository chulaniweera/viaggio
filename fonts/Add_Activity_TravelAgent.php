<?php include 'header.php'; ?>
	  <div class="container-fluid" style= 'background-color: #6B8E23; width:80%; margin-top: 50px'>
		<div class="page-header">
			<h1><font color=white>ADD ACTIVITY</font></h1>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				
				<div class="row">
					<div class="col-sm-8">
						<div class="panel panel-primary" >
							<div class="panel-heading">Activity Details</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="control-label col-sm-3" for="activityName">Activity Name</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="activityName">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="type">Activity Type</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="type">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="location">Location</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="location">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="description">Description</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="description">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="seasons">Seasons</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="season">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="duration">Duration (min)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="duration">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="rate">Rating</label>
										<div class="col-sm-7">
											<input type="number" class="form-control" id="rate">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="cost">Cost (Rs)</label>
										<div class="col-sm-7">
											<input type="number" class="form-control" id="cost">
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
						<div class="panel panel-primary" style="width: 350px">
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
  </body>
</html>

