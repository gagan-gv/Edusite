<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if($_SESSION['valid_user']!=true){
        header('Location: toAcct.php');
        exit;
    }
?>