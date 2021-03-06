<?php
    require("mysql.php");
?>
<?php
    session_start();
    $learner = $_SESSION['uname'];
    $cid = mysqli_query($con,"SELECT `Course_ID` FROM `Accept_or_Reject` WHERE `Permit` = 'Y'");
    $count = mysqli_num_rows($cid);
    if($count>=1){
        $cid = implode(mysqli_fetch_assoc($cid));
        $title = mysqli_query($con,"SELECT `Course_Title` FROM `Course` WHERE `Course_ID` = '$cid'");
        $title = implode(mysqli_fetch_assoc($title));
        $category = mysqli_query($con,"SELECT `Category` FROM `Course` WHERE `Course_ID` = '$cid'");
        $category = implode(mysqli_fetch_assoc($category));
        $desc = mysqli_query($con,"SELECT `Description` FROM `Course` WHERE `Course_ID` = '$cid'");
        $desc = implode(mysqli_fetch_assoc($desc));
        $img = mysqli_query($con,"SELECT `C_Image` FROM `Course` WHERE `Course_ID` = '$cid'");
        $imgrow = mysqli_fetch_assoc($img);
        $enroll = mysqli_query($con,"SELECT `Learner_ID` FROM `Course_Enroll` WHERE `Learner_ID` = '$learner' AND `Course_ID` = '$cid'");
        if($count>0){
            if($enroll){
                $enrollecho = "Go to Course";
            }
            else{
                $enrollecho = "Enroll";
            }
        }
    }
?>
<?php
    if(isset($_POST['enroll'])){
        $sql = mysqli_query($con,"INSERT INTO `Course_Enroll`(`Learner_ID`, `Course_ID`) VALUES('$learner','$cid')");
        if($sql && $enroll){
            header("Location:courses.php");
            exit;
        }
        else if(!$sql && $enroll){
            header("Location: learn.php");
            exit;
        }
        else{
            echo '<script>alert("You weren\'t enrolled to the course")</script>';
        }
    }
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
                    <a class="logo" href="myStudAcct.php">
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
    <!-- /Header -->
    <div>
    <?php
        echo '<form method="post" action="">
            <div class="card-group">
                <div class="card"><img class="card-img-top w-100 d-block" id="courseimg" style="width:300px; height:200px; border-radius: 8px;"src="data:image/jpeg;base64,',base64_encode($imgrow['C_Image']),'"/>
                    <div class="card-body">
                        <h4 class="card-title">'.$title.'</h4>
                        <h6 class="card-text">'.$category.'</h6>
                        <p class="card-text">'.$desc.'</p>
                        <button class="btn btn-primary" type="submit" name="enroll" id="enroll"><strong>'.$enrollecho.'</strong></button>
                    </div>
                </div>
            </div>
        </form>';
    ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>