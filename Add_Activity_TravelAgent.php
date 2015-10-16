<?php include_once 'core/init.php';?>



<?php include 'head.php'; ?>
	  <div class="container-fluid" style ='background-color: #262626; width:80%; margin-top: 30px;opacity:0.8'>
		<div class="page-header">
			<h1><font color=white>ADD ACTIVITY</font></h1>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal" role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="row">
						<div class="col-sm-8">
							<div class="panel panel-primary" >
								<div class="panel-heading">Activity Details</div>
								<div class="panel-body">
									
										<div class="form-group">
											<label class="control-label col-sm-3" for="activityName">Activity Name *</label>
											<div class="col-sm-7">
												
												<script>
													function validateActivityName() {
														var name = document.getElementById("activityName").value;
														var letters = /^[a-zA-Z\s]*$/;
														if( name.match(letters)){
															return true;
														}else{
															alert("Invalid data");
															document.getElementById("activityName").value=document.getElementById("activityName").value.slice(0,-1);
															name.focus();
															return false;
														}
													}	
												</script>
												
												<input type="text" class="form-control" id="activityName" onkeyup="validateActivityName();" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-3" for="type">Activity Type *</label>
											<div class="col-sm-7">
												
												<script>
													function validateActivityType() {
														var name = document.getElementById("activityType").value;
														var letters = /^[a-zA-Z\s]*$/;
														if( name.match(letters)){
															return true;
														}else{
															alert("Invalid data");
															document.getElementById("activityType").value=document.getElementById("activityType").value.slice(0,-1);
															name.focus();
															return false;
														}
													}	
												</script>
												
												<input type="text" class="form-control" id="activityType" onkeyup="validateActivityType();" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-3" for="location">Location *</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" id="location">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-3" for="description">Description *</label>
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
						<div class="panel panel-primary">
							<div class="panel-heading">Activity Image</div>
							<div class="panel-body">
								<div>
									<center><img id="blah" src="activity.png" width = '250px' height='250px'alt="your image" /></center>
								</div>
								<input type='file'  class="btn btn-primary" onchange="readURL(this);" />
							</div>
						</div>
					</div>
					<script type="text/javascript">
					     function readURL(input) {
				            if (input.files && input.files[0]) {
				                var reader = new FileReader();

				                reader.onload = function (e) {
				                    $('#blah')
				                        .attr('src', e.target.result)
				                        .width(250)
				                        .height(250);
				                };

				                reader.readAsDataURL(input.files[0]);
				            }
				        }
				    </script>
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

