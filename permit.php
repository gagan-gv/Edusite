<?php
    require('mysql.php');
?>
<?php
    session_start();
    $cid = mysqli_query($con,"SELECT `Course_ID` FROM `Accept_Or_Reject` WHERE `Permit` = 'N'");
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
    }
?>
<?php
    if(isset($_POST['acceptsub'])){
        $sql1 = mysqli_query($con,"UPDATE `Accept_Or_Reject` SET `Permit` = 'Y' WHERE `Course_ID` = '$cid'");
        if($sql1){
            header('Location:permit.php');
            exit;
        }
    }
    if(isset($_POST['rejectsub'])){
        $sql2 = mysqli_query($con,"DELETE FROM `Accept_Or_Reject` WHERE `Course_ID` = '$cid'");
        if($sql2){
            header('Location:permit.php');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>edusite</title>
    <link rel="stylesheet" href="styles.min.css?h=6e467259765f94f11f828b97b2015824">
    <link rel="stylesheet" href="styles.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="index.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="permit.css">
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="myAdminAcct.php">
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
                    <li><a href="myAdminAcct.php">Home</a></li>
                    <li><a href="permit.php">Permit Courses</a></li>
                    <li><a href="signout.php">Sign Out</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </header>
    
    <div>
        <div class="card" id="permit">
            <div class="card-body">
                <form action="" method="post">
                    <?php
                        if($count>0){
                            echo '<img style="width:300px; height:200px;"src="data:image/jpeg;base64,',base64_encode($imgrow['C_Image']),'"/>
                            <h4 class="card-title">'.$title.'</h4>
                            <h6 class="text-muted card-subtitle mb-2">'.$category.'</h6>
                            <p class="card-text">'.$desc.'</p>
                            <button class="green" id="y" name="acceptsub">Accept</button>
                            <button class="red" id="n" name="rejectsub">Reject</button>';
                        }
                        else{
                            echo '<h1 style="font-size:36px; color: black;">No new courses have been registered by any instructor.</h1>';
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>