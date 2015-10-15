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
                  <br>
                  <li><a href="View_Itineraries_Tourist.php"><span class="glyphicon glyphicon-folder-open"></span> View Past Itenaries</a></li>
                  <br>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                </ul>
              </li>
                  </ul>
                </div>
            </div>
        </nav>
    <body>
    <div class="col-lg-12" style='margin-top:30px'>
    <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('1.jpg');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 1</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('2.jpg');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 2</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('3.jpg');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 3</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>
    </div>
    </body>