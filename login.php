<?php
include("config.php");
session_start();

if (isset($_POST['email']) and isset($_POST['passwordUser'])) {
//Assigning posted values to variables.
    $email = $_POST['email'];
    $passwordUser = $_POST['passwordUser'];
    $passwordEncrypted = md5($passwordUser);
// Checking the values are existing in the database or not
    $query = "SELECT * FROM `user` WHERE email='$email' and password='$passwordEncrypted'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
//If the posted values are equal to the database values, then session will be created for the user.
    if ($count == 1) {
        $_SESSION['email'] = $email;
    } else {
//If the login credentials doesn't match, he will be shown with an error message.
        $fmsg = "Invalid Login Credentials.";
    }
}
// if the user is logged in Greets the user with message
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    echo '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Logged in</title>

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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css" />
     <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
    
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
                            <li><a href="index.html">HOME</a></li>
                           
                            <li><a href="about.html">ABOUT US</a></li>
                            <li><a href="registration.php">REGISTER</a></li>
                            <li><a href="login.php" class="menu-top-active">LOGGED</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div id="slideshow-sec">
        <div id="carousel-div" class="carousel slide" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/ass.png" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" > Assassins Creed</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Syndicate</h2>  
                            </div>
                           
                        </div>
                        <div class="item">
                            <img src="assets/img/crash.png" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Crash Bandicoot</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Return</h2>  
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/cod.png" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Call of Duty </h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Apocalypse</h2>  
                            </div>
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-div" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-div" data-slide-to="1"></li>
                        <li data-target="#carousel-div" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-div" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-div" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
    </div>
    <!-- SLIDESHOW SECTION END-->
    
        

        <div class="container">
            
            <div class="row " >
                  <ul id="filters" >
						<li><span class="filter active" data-filter="war sport strategy">All </span></li>
						<li><span class="filter active">/</span></li>
						<li><span class="filter" data-filter="war">war</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="sport">sport</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="strategy">strategy</span></li>
					</ul>
              <div class="col-md-4 ">

                    <div class="portfolio-item awesome mix_all" data-cat="war" >


                        <img src="assets/img/portfolio/war.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info " title="Image Title Here" href="assets/img/portfolio/war.jpg" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div class="portfolio-item landscape mix_all" data-cat="sport" >


                        <img src="assets/img/portfolio/fifa2.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/fifa2.jpg" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div class="portfolio-item nature mix_all" data-cat="strategy" >


                        <img src="assets/img/portfolio/minecraft2.png" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/minecraft2.png" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>

             <div class="row " style="padding-top: 50px;">
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="strategy" >


                        <img src="assets/img/portfolio/age.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                           <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info " title="Image Title Here" href="assets/img/portfolio/age.jpg" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="war" >


                        <img src="assets/img/portfolio/duke.png" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/duke.png" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="strategy" >


                        <img src="assets/img/portfolio/kula.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/kula.jpg" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>
                    <div class="row "  style="padding-top: 50px;" >
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="war" >


                        <img src="assets/img/portfolio/resident.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview  btn btn-info" title="Image Title Here" href="assets/img/portfolio/resident.jpg" download> <i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item awesome mix_all" data-cat="war" >


                        <img src="assets/img/portfolio/metal.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/metal.jpg" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature landscape mix_all" data-cat="strategy" >


                        <img src="assets/img/portfolio/gta.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/gta.jpg" download><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>

        </div>
         
    <!-- BELOW SLIDESHOW SECTION END-->
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h1 class="tag-home">Yeah!so many funny games! Just try any game you are interested!<br> If you wish you can logout following this link
   <a href="logout.php">Logout</a>  but why do this mistake?</h1> 
             
               <hr />
                 </div>
            </div>
          </div>
     <!-- TAG HOME SECTION END-->
   
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

</html>;';
} else {
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
            <title>Php Games: Login</title>

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
                                    <li><a href="registration.php">REGISTER</a></li>
                                    <li><a href="login.php" class="menu-top-active">LOGIN</a></li>
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


                                <h1 class="head-line">PLEASE INSERT YOU USERNAME AND PASSWORD <br> AND YOU WILL ENJOY OUR GAME!</h1>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- BELOW SLIDESHOW SECTION END-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="tag-home">Our website is totally free, but you need to log in to download games which you are interest to play. Don't forget your Email and password which you use to register!</h1> 
                        <hr />
                    </div>
                </div>
            </div>
            <!-- TAG HOME SECTION END-->

            <div class="just-sec">


                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <form class="form-signin" method="POST" action="login.php">
                                <?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                                <div class="just-txt-div">
                                    <div class="form-group">


                                        <label>Enter Your Email</label>
                                        <input class="form-control" type="text" name="email" />

                                    </div>

                                    <div class="form-group">
                                        <label>Your Password</label>

                                        <br>
                                            <input type="password" maxlength="30" size="75" value="passwordUser" name="passwordUser" />
                                    </div>


                                    <button class="btn btn-success btn-lg" type="submit" value="login">LOGIN! </button></a>
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

<?php } ?>
