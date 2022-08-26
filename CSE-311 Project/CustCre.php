<?php

include 'connectcustcre.php';

if (isset($_POST['submit'])) {


  $User_id = $_POST["uid"];
  $First_Name = $_POST["fname"];
  $Last_Name = $_POST["lname"];
  $Active_Date = $_POST["adate"];
  $Phone_no = $_POST["phn"];
  $Email = $_POST["mail"];
  $NID = $_POST["nid"];
  $Address = $_POST["add"];
  $Password = $_POST["pass"];
  $choose = $_POST["pack"];

  $sql = "INSERT INTO
Customer_info( 
`User_id`,
First_Name,
 Last_Name, 
Active_Date, 
Phone_no,
Email,
NID , 
 `Address`,
 `Password`,`choose`) VALUES('$User_id','$First_Name','$Last_Name','$Active_Date',$Phone_no,'$Email',$NID,'$Address','$Password','$choose')";

  $result = mysqli_query($con, $sql);


  if ($result) {
    //echo "Data inserted";
    header('location:displaycust.php');
  } else {
    die(mysqli_connect_error($con));
  }
}


?>







<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">


  <title>User insertation</title>
</head>

<body style="background: linear-gradient(to bottom, #70e1f5, #ffd194);">
  <div class="container my-5">
    <div class style="text-align:center;">
      <h2><u>Add New Customer</u></h2>
</div>
    <form method="post">
      <div class="form-group">
        <label><strong>User ID</strong></label>
        <input type="text" class="form-control" placeholder="Enter Your User ID" name="uid">
      </div>

      <div class="form-group">
        <label><strong>First Name</strong></label>
        <input type="text" class="form-control" placeholder="Enter Your First Name" name="fname">
      </div>

      <div class="form-group">
        <label><strong>Last Name</strong></label>
        <input type="text" class="form-control" placeholder="Enter Your Last Name " name="lname">
      </div>

      <div class="form-group">
        <label><strong>Activation Date</strong></label>
        <input type="Date" class="form-control" placeholder="Enter Your Active Date" name="adate">
      </div>

      <div class="form-group">
        <label><strong>Phone No</strong></label>
        <input type="tel" class="form-control" placeholder="Enter Your Phone Number" name="phn">
      </div>

      <div class="form-group">
        <label><strong>Email</strong></label>
        <input type="email" class="form-control" placeholder="Enter Your Email Address" name="mail">
      </div>

      <div class="form-group">
        <label><strong>NID</strong></label>
        <input type="number" class="form-control" placeholder="Enter Your NID Number" name="nid">
      </div>

      <div class="form-group">
        <label><strong>Address</strong></label>
        <input type="text" class="form-control" placeholder="Enter Your Address" name="add">
      </div>

      <div class="form-group">
        <label><strong>Password</strong></label>
        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass">
      </div>

      <fieldset>
        <div class="choose">
          <div class="he">
            <label><strong>Choose Package:</strong></label>
          </div>
          <div class="side2">
            <div>
              <br>
              <input type="radio" name="pack" value="5 Mbps" checked>
              <label style="margin-right: 18px;"><h5>5 Mbps</h5>  </label>

            </div>

            <div>
              <input type="radio" name="pack" value="10 Mbps">
              <label style="margin-right: 10px;"><h5>10 Mbps</h5> </label>

            </div>

            <div>
              <input type="radio" name="pack" value="15 Mbps">
              <label style="margin-right: 10px;"><h5>15 Mbps</h5> </label>

            </div>
            <div>
              <input type="radio" name="pack" value="20 Mbps">
              <label style="margin-right: 8px;"><h5>20 Mbps</h5> </label>

            </div>
          </div>
          <div class="side">
            <div>

              <input type="radio" name="pack" value="40 Mbps">
              <label style="margin-right: 9px;"><h5>40 Mbps</h5> </label>
            </div>
            <div>
              <input type="radio" name="pack" value="100 Mbps">
              <label><h5>100 Mbps</h5> </label>
            </div>
            <div>
              <input type="radio" name="pack" value="12 MbpsE">
              <label><h5>12 MbpsE</h5></label>
            </div>
            <div>
              <input type="radio" name="pack" value="20 MbpsF">
              <label><h5>20 MbpsF</h5></label>
            </div>
          </div>
        </div>
      </fieldset>
      <br>

      <button type="submit" class="btn 
      btn-primary" name="submit">Submit</button>
      <button class="btn btn-primary my-5" input type="button"class="text-light" onclick="history.back()">Go Back!</button>
    </form>

  </div>
</body>

</html>