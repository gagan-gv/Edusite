<?php
    require('mysql.php');
    session_start();
    if(!isset($_SESSION['uname']) || $_SESSION['uname']!=$username){
        $loggedin = true;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edusite</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="index.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header -->
    <header id="header" class="transparent-nav">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="index.php">
                        <img src="./img/logo-alt.png" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->
            </div>
            <!-- Navigation -->
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="toAcct.php"><i class="fa fa-user"></i></a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </header>
    <!-- /Header -->
    <!-- Home -->
    <div id="home" class="hero-area">
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
        <!-- /Backgound Image -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text">Edusite Free Online Training Courses</h1>
                        <p class="lead white-text">Path to the future.</p>
                        <a class="main-button icon-button" href="#about">Get Started!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Home -->
    <!-- About -->
    <div id="about" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header">
                        <h2>Welcome to Edusite</h2>
                    </div>
                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>Online Courses </h4>
                            <p>Self Paced, Curated Lectures.</p>
                        </div>
                    </div>
                    <!-- /feature -->
                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>Expert Teachers</h4>
                            <p>Certified and Passionate Instructors.</p>
                        </div>
                    </div>
                    <!-- /feature -->
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="./img/about.png" alt="">
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /About -->
    <!--Contact-->
    <div id="contact-cta" class="section">
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
        <!-- Backgound Image -->
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="white-text">Contact Us</h2>
                    <p class="lead white-text">Always there for you.</p>
                    <a class="main-button icon-button" href="contact.html">Contact Us Now</a>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!--/Contact-->
    <!--Footer-->
    <footer id="footer" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- footer logo -->
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.php">
                            <img src="./img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- footer logo -->
                <!-- footer nav -->
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <!-- /footer nav -->
            </div>
        </div>
        <!-- /container -->
    </footer>
    <!-- /Footer -->
</body>

</html>