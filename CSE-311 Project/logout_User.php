<?php 
    session_start();
    if(isset($_GET['logout_User']))
    {
        session_destroy();
        header("location:C_login.php");
    }
?>