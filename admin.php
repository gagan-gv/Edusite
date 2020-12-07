<?php 
    require("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusite</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <h2>Sign In</h2>
            </div>
            <form action="" id="signin" class="input-group" method="POST">
                <input type="text" class="input-field" placeholder="User ID" required name="user">
                <input type="password" class="input-field" placeholder="Password" required name="password">
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="signin">Sign In</button>
                <?php
                    if(isset($_POST["signin"])){
                        $uname = $_POST["user"];
                        $pass = $_POST["password"];

                        $sql = mysqli_query($con,"SELECT count(*) AS ids FROM Admin_Acct WHERE Admin_ID = '" .$uname."' AND A_Password = '".$pass."'") or die(mysqli_error($con));

                        $rw = mysqli_fetch_array($sql);

                        if($rw["ids"]>0){
                            header("Location: myAdminAcct.php");
                            exit;
                        }
                        else{
                            echo "<script>alert('User Id or Password is incorrect')</script>";
                        }
                    }
                ?>
                
            </form>
        </div>
    </div>
</body>

</html>