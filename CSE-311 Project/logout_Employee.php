<?php 
    session_start();
    if(isset($_GET['logout_Employee']))
    {
        session_destroy();
        header("location:Employee.php");
    }
?>