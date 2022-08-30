<?php 
    session_start();
    if(isset($_GET['logout_Admin']))
    {
        session_destroy();
        header("location:login.php");
    }
?>