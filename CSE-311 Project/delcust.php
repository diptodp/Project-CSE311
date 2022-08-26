<?php

include 'connectcustcre.php';

if (isset($_GET['delid'])) {
    $id=$_GET['delid'];

    $sql="delete from `customer_info` where `User_id`= '$id'";

    $result = mysqli_query($con, $sql);

    if($result){

        // echo "Deleted successfully";
        header('location:displaycust.php');
    }
    else{
        die(mysqli_error($con)) ;

    }

   


  

};
// if (isset($_GET['delid'])) {
//     $id=$_GET['delid'];

//     $sql="delete from `customer_complain` where `User_id`= '$id'";

//     $result = mysqli_query($con, $sql);

//     if($result){

//         // echo "Deleted successfully";
//         header('location:displaycomplain.php');
//     }
//     else{
//         die(mysqli_error($con)) ;

//     }

   


  

// };