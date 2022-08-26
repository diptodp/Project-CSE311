<?php

include 'connectempcre.php';

if (isset($_GET['delid'])) {
    $id=$_GET['delid'];

    $sql="delete from `employee_info` where `Emp_id`= '$id'";

    $result = mysqli_query($con, $sql);

    if($result){

        // echo "Deleted successfully";
        header('location:displayemp.php');
    }
    else{
        die(mysqli_error($con)) ;

    }

   


  

};