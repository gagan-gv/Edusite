<?php

// Connecting with MySQL

$servername = 'localhost:3307';
$username = 'root';
$password = '';//with XAMPP password is '' else change your password accordingly
$database = 'edusite';

$con = mysqli_connect($servername,$username,$password,$database);

?>