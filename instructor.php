<?php 
    require("mysql.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusite</title>
    <link rel="stylesheet" href="instructor.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="signin()">Sign In</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <form action="" id="signin" class="input-group" method="POST">
                <input type="text" class="input-field" placeholder="User ID" required name="username">
                <input type="password" class="input-field" placeholder="Password" required name="password">
                <input type="checkbox" class="check-box" placeholder="Password"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="signin">Sign In</button>
                <?php
                    if(isset($_POST["signin"])){
                        $uname = $_POST["username"];
                        $pass = $_POST["password"];

                        $sql = mysqli_query($con,"SELECT count(*) AS ids FROM Inst_Acct WHERE Inst_ID = '" .$uname."' AND I_Password = '".$pass."'");

                        $rw = mysqli_fetch_array($sql);

                        if($rw["ids"]>0){
                            session_start();
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $uname;
                            header("Location: myInstAcct.php");
                            exit;
                        }
                        else{
                            echo "<script>alert('User Id or Password is incorrect')</script>";
                        }
                    }
                ?>
            </form>
            <form action="" id="signup" class="input-group" method="POST">
                <input type="text" class="input-field" placeholder="Name" required name="name">
                <input type="email" class="input-field" placeholder="Email ID" required name="email">
                <input type="text" class="input-field" placeholder="User ID" required name="username">
                <input type="password" class="input-field" placeholder="Password" required name="password">
                <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions.</span>
                <button type="submit" class="submit-btn" name="signup">Sign Up</button>
                <?php
                    if(isset($_POST["signup"])){
                        $name = $_POST["name"];
                        $mail = $_POST["email"];
                        $uname = $_POST["username"];
                        $pass = $_POST["password"];

                        $sql = mysqli_query($con,"INSERT INTO Inst_Acct VALUES('".$uname."', '".$pass."', '".$name."', '".$mail."');");
                    }
                ?>
            </form>
        </div>
    </div>
    <script src="instructor.js"></script>
</body>

</html>