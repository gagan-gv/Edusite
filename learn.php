<?php
    require('mysql.php');
?>
<?php
    session_start();
    $learner = $_SESSION['uname'];
    $cid = isset($_GET['enroll']);
    $conTitle = mysqli_query($con,"SELECT `Content_Title` FROM `Course_Content` WHERE `Content_ID`='CON0001' and `Course_ID` = '$cid'"); 
    $conTitle = mysqli_fetch_assoc($conTitle);
    echo $conTitle;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>edusite</title>
    <link rel="stylesheet" href="styles.min.css">   
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
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
                    <li><a href="myStudAcct.php">Home</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="mycourses.php">My Courses</a></li>
                    <li><a href="signout.php">Sign Out</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </header>
    <div>
        <video src="\Course\<?php$conTitle?>" style="width:75%; height:100%;"></video>
        <ol style = "float:right; margin-right:15px; margin-top:20px;">
            <li><?php var_dump($conTitle)?></li><br/>
            <li>Quiz</li>
        </ol>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>