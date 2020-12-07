<?php 
    require("mysql.php");
    /*if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
        global $inst = $_SESSION['username'];
    }*/
?>

<?php
    if(isset($_POST['submit'])){
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                session_start();
                $inst = $_SESSION['username'];
                $title = $_POST['title'];
                $category = $_POST['category'];
                $desc = $_POST['description'];
                $vid = $_FILES['vid']['name'];
                $tmp_vid = $_FILES['vid']['tmp_name'];
                move_uploaded_file($tmp_vid,"Course/".$vid);
                $imag = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                $sql1 = mysqli_query($con,"INSERT INTO `Course`(`Course_Title`, `Category`, `Description`, `C_Image`) VALUES ('$title','$category','$desc', '{$imag}')");
                $r = mysqli_query($con, "SELECT `Course_ID` FROM `Course` WHERE `Course_Title` = '$title' ORDER BY `Course_ID` DESC LIMIT 1");
                $r1 = implode(mysqli_fetch_assoc($r));
                $sql2 = mysqli_query($con,"INSERT INTO `Course_Content`(`Course_ID`,`Content_ID`,`Content_Title`) VALUES('$r1','CON0001','$vid')");
                $sql3 = mysqli_query($con,"INSERT INTO `Course_Create` VALUES('$inst','$r1')");
                $sql4 = mysqli_query($con,"INSERT INTO `Accept_Or_Reject` VALUES('A0001','$inst','$r1','N')");

                if($sql1 && $sql2 && $sql3 && $sql4){
                    header('Location:myInstAcct.php');
				    exit;
                }
                else{
                    echo "<script>alert('The file wasn't uploaded')</script>";
                }
            }
        }
    }
?>

<html>
    <head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course upload</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="contact.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="file.css">
    </head>

    <body>
    <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a class="logo" href="index.html">
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
                        <li><a href="myInstAcct.php">Home</a></li>
                        <li><a href="file.php">Add Courses</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="signout.php">Sign Out</a></li>
                    </ul>
                </nav>
                <!-- /Navigation -->
            </div>
        </header>
        <!-- /Header -->
        <div id="form">
            <form action = "file.php" method = "POST" enctype =  "multipart/form-data">
                <label for = "title">Title of the course</label>
                <input type="text" name ="title" required id="text"><br/><br/>
                <label for="category">Category</label>
                <input type="text" name="category" required id="text"><br/><br/>
                <label for="description">Description</label>
                <textarea name="description" id="textarea" cols="25" rows="10"></textarea><br/><br/>
                <em>Please add the compiled video file.</em><br/><br/>
                <input type ="file" name = "vid" required id="vid"><br/><br/>
                <em>Add the course image.</em>
                <input type="file" name="file" required id="file"><br/><br/>
                <button type = "submit" name = "submit">UPLOAD </button>
            </form>
        </div>
    </body>
</html>