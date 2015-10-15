<?php include 'head.php'; ?>
<body style="background-color:#6B8E23">
    <div class="container-fluid" style ='background-color: #6B8E23; width:80%; margin-top:30px'>
        <div class="page-header">
            <h1><font color= white>CREATE ITINERARY</font></h1>
        </div>
        <?php
        if (logged_in() === true) {
            echo 'Logged In';
        }
        else
            echo 'Not Logged In';
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" role="form" id="form1">
                    <div class="panel panel-primary"> 
                        <div class="panel-heading">Travel And Accommodation Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="arrival date">Arrival Date</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" id="arrival date" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="departure date">Departure Date</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" id="departure date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="number of adults">Number Of Adults</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" id="number of adults" min=0>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="number of children">No Of Children</label>
                                <div class="col-sm-3">
                                    <label for="below 2 yrs">Below 2 yrs</label>
                                    <input type="number" class="form-control" id="below 2 yrs" min=0>
                                </div>
                                <div class="col-sm-3">
                                    <label for="between 2-12 yrs">Between 2-12 yrs</label>
                                    <input type="number" class="form-control" id="between 2-12 yrs" min=0>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="rooms">Rooms</label>
                                <div class="col-sm-3">
                                    <label for="single">Single</label>
                                    <input type="number" class="form-control" id="single" min=0>
                                </div>
                                <div class="col-sm-3">
                                    <label for="double">Double</label>
                                    <input type="number" class="form-control" id="double" min=0>
                                </div>
                                <div class="col-sm-3">
                                    <label for="triple">Triple</label>
                                    <input type="number" class="form-control" id="triple" min=0>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="acm">Meal Plan</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Bed and Breakfast</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Full Board</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Half Board</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">All Inclusive</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Room Only</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="acm">Accomodation Type</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Five Star</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Four Star</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Three Star</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Two Star</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Standard Guest Hotels</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">ECO Hotels</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary"> 
                        <div class="panel-heading">Type Of Holiday</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="preferred holiday plan">Preferred Holiday Plan</label>
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Adventurous, Exciting And Fun</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Thought Provoking And Peaceful</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Culture And History</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Healthy And Rejuvenat</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">ECO Tourism</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Wedding And Honeymoon</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Shopping</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="things prefer to see">Things Prefer To See</label>
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Beaches</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Flora And Founa</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Archiological Sites</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Cities</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Wild Life</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Extreme Sports Options</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Mountains, Tea Plantations And Waterfalls</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right btn-margin-right col-sm-offset-1">Submit</button>
                    <button type="reset" class="btn btn-primary pull-right btn-margin-right">Cancel</button>
                </form>
            </div>
        </div>
</body>
</html>
