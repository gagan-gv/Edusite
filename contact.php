<?php 
    require("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edusite HelpDesk</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="contact.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="index.php">
                        <img src="./img/logo.png" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Mobile toggle -->
                <button class="navbar-toggle">
						<span></span>
					</button>
                <!-- /Mobile toggle -->
            </div>
            <!-- Navigation -->
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="toAcct.php"><i class="fa fa-user"></i></a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </header>
    <!-- /Header -->
    <!-- Hero-area -->
    <div class="hero-area section">
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
        <!-- /Backgound Image -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <h1 class="white-text">Get In Touch</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Hero-area -->
    <!-- Contact -->
    <div id="contact" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- contact form -->
                <div class="col-md-6">
                    <div class="contact-form">
                        <h4>Send A Message</h4>
                        <form>
                            <input class="input" type="text" name="name" placeholder="Name">
                            <input class="input" type="email" name="email" placeholder="Email">
                            <input class="input" type="text" name="subject" placeholder="Subject">
                            <textarea class="input" name="message" placeholder="Enter your Message"></textarea>
                            <button class="main-button icon-button pull-right">Send Message</button>
                        </form>
                    </div>
                </div>
                <!-- /contact form -->
                <!-- contact information -->
                <div class="col-md-5 col-md-offset-1">
                    <h4>Contact Information</h4>
                    <ul class="contact-details">
                        <li><i class="fa fa-envelope"></i>admin@edusite.com</li>
                        <li><i class="fa fa-phone"></i>+91 9874563210</li>
                        <li><i class="fa fa-map-marker"></i>Admin, Edusite Inc.</li>
                    </ul>
                </div>
                <!-- contact information -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </div>
    <!-- /Contact -->

    <!-- Footer -->
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
                        <li><a href="index.php#about">About</a></li>
                    </ul>
                </div>
                <!-- /footer nav -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /Footer -->
    <!-- preloader -->
    <!-- jQuery Plugins -->
</body>

</html>