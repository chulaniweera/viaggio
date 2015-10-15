<div class="col-lg-9" style='margin-top:30px'>
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
<div class="col-lg-3" style='margin-top:30px;'>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <div class= "panel panel-primary" style='height:500px; opacity:80%'>
        <div class="panel-heading"><h3>Login</h3></div>
        <div class="panel-body">
            <center><img src="user.jpg" alt="user" class="img-circle"></center>
            <br>
            <form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                </div>
                <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary col-sm-12">Login</button>
                <br></br>
                <a href="Registration_Form.php" class="btn btn-primary btn-info col-sm-12" role="button">Sign Up</a>
            </form>
        </div>
    </div>
</div>
</body>
<?php
    include_once 'core/init.php';

    
    if (empty($_POST === false)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (user_exists($username) === false) {
            $errors = "User doesn't exists";
        }
        else{
            $login = login($username, $password);
            if($login === false){
                $errors = "That username or password is incorrect";
            }
            else{
                $_SESSION['user_id'] = $login;
                $_SESSION['name']=$username;// create a session for user name to ;
                header('Location: Create_Itinerary.php');
                exit();
            }
        }
        echo "<script type='text/javascript'>alert('$errors');</script>";
        //header('Location: viaggio.php');
    }
?>
