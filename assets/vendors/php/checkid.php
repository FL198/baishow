<?php
    if(isset($_COOKIE['PHPSESSID'])){
        session_start();
        if(empty($_SESSION['userid'])){
            header('location:/pages/admin/login.php');
        }
    }else{
        header('location:/pages/admin/login.php');
    }
?>