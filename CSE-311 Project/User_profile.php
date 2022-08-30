<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="User_profile.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">


</head>

<body style="background-color: #CCCCFF; margin-top: 150px; margin-left: 300px;">
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <h6 class="f-w-600"><strong><h4>Hi,</h4></strong>
                                    <h5 style="color: #330185">
                                    <?php


                                    echo  $_SESSION['user_name'];

                                    ?><br></h5>
                                    
                                    Welcome To Your Profile.</h6>


                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">PROFILE INFORMATION</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600"><strong>User Name</strong></p>
                                            <h6 class="text-muted f-w-400"> <?php 
                                            echo  $_SESSION['user_name'];?>  </h6>
                                        </div>


                                        <?php
                                         include('u_connection.php'); 
                                        $test = $_SESSION['user_name'];
                                      $sql = "select *from customer_info where User_id = '$test'";  
        $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    // echo $row['Active_Date'];
    $actv_date = $row['Active_Date'];
    $laname = $row ['Last_Name'];
    $faname = $row ['First_Name'];
    $phn = $row['Phone_no'];
    $email = $row['Email'];
    $nid = $row['NID'];
    $adrs = $row['Address'];
    $chs = $row['choose'];

    echo ' <div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>First Name</strong></p>
    <h6 class="text-muted f-w-400">'.$faname.'</h6>
</div>
<div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>Last Name</strong></p>
    <h6 class="text-muted f-w-400">'.$laname.'</h6>
</div>
<div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>Activation Date</strong></p>
    <h6 class="text-muted f-w-400">'.$actv_date.'</h6>
</div>
<div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>Phone No</strong></p>
    <h6 class="text-muted f-w-400">'.$phn.'</h6>
</div>
<div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>Email</strong></p>
    <h6 class="text-muted f-w-400">'.$email.'</h6>
</div>
<div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>NID No</strong></p>
    <h6 class="text-muted f-w-400">'.$nid.'</h6>
</div>
<div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>Address</strong></p>
    <h6 class="text-muted f-w-400">'.$adrs.'</h6>
</div>
<div class="col-sm-6">
    <p class="m-b-10 f-w-600"><strong>Package</strong></p>
    <h6 class="text-muted f-w-400">'.$chs.'</h6>
</div>';
}
?>





                                       
                                    </div>

                                    <strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>