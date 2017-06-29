<?php

//get the data from the db
include("config.php");

if (isset($_POST['email']) and isset($_POST['passwordUser'])) {
    $email = $_POST['email'];
    $passwordUser = $_POST['passwordUser'];
    $encrypted_password = md5($passwordUser);

    if (strpos($email, '@') == false) {
        $existmsg = "Please enter a valid email address";
    } elseif ((!preg_match("#[0-9]+#", $passwordUser)) || (!preg_match("#[a-zA-Z]+#", $passwordUser)) || (strlen($passwordUser) < 8) ){
        $existmsg = "Password must include at least one number, one letter and should be at least 8 characters";
    }
    /*
    if (!preg_match("#[a-zA-Z]+#", $passwordUser)) {
        $existmsg = "Password must include at least one letter!";
        
    } 
    if (strlen($passwordUser) < 8) {
        $existmsg = "Password too short!";
    }
    */
    else {
        $query1 = "SELECT * FROM `user` WHERE email='$email'";
        $queryresult = mysqli_query($conn, $query1) or die(mysqli_error($con));
        $contator = mysqli_num_rows($queryresult);
        if ($contator >= 1) {
            $existmsg = "Email already exists. Please enter another email";
        } else {
            $sql = "INSERT INTO user (email, password) VALUES ('$email', '$encrypted_password')";
            if ($conn->query($sql) === TRUE) {
                header("Location: SuccessfullRegistration.html"); /* Redirect browser */
                exit();
            } else {
                "Not worked......";
            }
        }
    }
}




$conn->close();


?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Php Games: Registration</title>

        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME STYLE  -->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- ANIMATE STYLE  -->
        <link href="assets/css/animate.css" rel="stylesheet" />
        <!-- FLEXSLIDER STYLE  -->
        <link href="assets/css/flexslider.css" rel="stylesheet" />
        <!-- CUSTOM STYLE  -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <!-- GOOGLE FONTS  -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    </head>
    <body>

        <div class="navbar navbar-inverse set-radius-zero" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">

                        <img src="assets/img/logo.png" />
                    </a>

                </div>
                <div class="right-div">
                    <strong>Support : </strong>  info@phpgames.com
                </div>

            </div>
        </div>
        <!-- LOGO HEADER END-->
        <section class="menu-section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="navbar-collapse collapse ">
                            <ul id="menu-top" class="nav navbar-nav navbar-right">
                                <li><a href="index.html" >HOME</a></li>

                                <li><a href="about.html">ABOUT US</a></li>
                                <li><a href="registration.php" class="menu-top-active">REGISTER</a></li>
                                <li><a href="login.php">LOGIN</a></li>
                                <li><a href="contact.html">CONTACT</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- MENU SECTION END-->

        <div class="below-slideshow">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="txt-block">


                            <h1 class="head-line">Register Now and Play!</h1>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- BELOW SLIDESHOW SECTION END-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="tag-home">It is very simple to finish register, just fill in your email and password, and then confirm it,
                        you will become our member. Please take your time!</h1> 
                    <hr />
                </div>
            </div>
        </div>
        <!-- TAG HOME SECTION END-->
        <div class="just-sec">


            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <form action="registration.php" method = "post">
                            <?php if (isset($existmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $existmsg; ?> </div><?php } ?>
                        <div class="just-txt-div">
                            <div class="form-group">
                                <label>Enter Your Email</label>
                                <input class="form-control" type="text" name="email"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Your Password</label>

                                <br>
                                    <input type="password" maxlength="30" size="75" value="mia_password" name="passwordUser"/>
                            </div>
                           

                            <button type="submit" class="btn btn-success btn-lg">REGISTER NOW! </button>
                        </div>
                            </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="just-txt-div">




                        </div>
                    </div>

                </div>

            </div>
        </div>         
        <!--JUST SECTION END-->   
        <div class="footer-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">


                        <h3> <strong>ABOUT COMPANY</strong> </h3>
                        <p style="padding-right:50px;" >
                            Our company focus on provide a platform for people to download game which they are interested.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">



                        <h3> <strong>SOCIAL PRESENCE</strong> </h3>
                        We love to be social,Catch Us On
                        <a href="#" ><h4>FACEBOOK </h4></a>
                        <a href="#" ><h4>TWITTER </h4></a>
                        <a href="#" ><h4>LINKEDIN </h4></a>


                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h3> <strong>PHYSICAL LOCATION</strong> </h3>
                        Reach Us Below:
                        <br />
                        <h4>155 Consumers Road, </h4>
                        <h4>North York, ON</h4>
                        <h4>Canada</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr />

                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER SECTION END-->
        <!-- WE PUT SCRIPTS AT THE END TO LOAD PAGE FASTER-->
        <!--CORE SCRIPTS PLUGIN-->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <!--BOOTSTRAP SCRIPTS PLUGIN-->
        <script src="assets/js/bootstrap.js"></script>
        <!--WOW SCRIPTS PLUGIN-->
        <script src="assets/js/wow.js"></script>
        <!--FLEXSLIDER SCRIPTS PLUGIN-->
        <script src="assets/js/jquery.flexslider.js"></script>
        <!--CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

    </body>

</html>
