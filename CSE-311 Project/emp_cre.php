<?php

include 'connectempcre.php';

if (isset($_POST['submit'])) {


  $Emp_id = $_POST["eid"];
  $Emp_name = $_POST["name"];
  $Join_Date = $_POST["jdate"];
  $NID = $_POST["nid"];
  $Phone_no = $_POST["phn"];
  $Email = $_POST["mail"];
  $Address = $_POST["add"];
  $Password = $_POST["pass"];
  $Salary = $_POST["salary"];
  

  $sql = "INSERT INTO
employee_info( 
`Emp_id`,
Emp_name,
Join_Date,
NID, 
Phone_no,
Email,
 `Address`,
 `Password`, 
 `Salary`) VALUES('$Emp_id','$Emp_name','$Join_Date','$NID',$Phone_no,'$Email','$Address','$Password','$Salary')";

  $result = mysqli_query($con, $sql);


  if ($result) {
   // echo "Data inserted";
    header('location:displayemp.php');
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


  <title>Employee insertation</title>
</head>

<body style="background: linear-gradient(to bottom, #70e1f5, #ffd194);">
  <div class="container my-5">
    <div class style="text-align:center;">
      <h2><u>Add New Employee</u></h2>
</div>
    <form method="post">
      <div class="form-group">
        <label><strong>Employee ID</strong></label>
        <input type="text" class="form-control" placeholder="Enter Employee ID" name="eid">
      </div>

      <div class="form-group">
        <label><strong>Name</strong></label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name">
      </div>

      <div class="form-group">
        <label><strong>Joining Date</strong></label>
        <input type="Date" class="form-control" placeholder="Enter Joining Date" name="jdate">
      </div>

      <div class="form-group">
        <label><strong>NID</strong></label>
        <input type="num" class="form-control" placeholder="Enter Joining Date" name="nid">
      </div>

      <div class="form-group">
        <label><strong>Phone No</strong></label>
        <input type="tel" class="form-control" placeholder="Enter Phone Number" name="phn">
      </div>

      <div class="form-group">
        <label><strong>Email</strong></label>
        <input type="email" class="form-control" placeholder="Enter Email Address" name="mail">
      </div>

      <div class="form-group">
        <label><strong>Address</strong></label>
        <input type="text" class="form-control" placeholder="Enter Address" name="add">
      </div>

      <div class="form-group">
        <label><strong>Password</strong></label>
        <input type="password" class="form-control" placeholder="Enter Password" name="pass">
      </div>
      <div class="form-group">
        <label><strong>Salary</strong></label>
        <input type="text" class="form-control" placeholder="Enter Salary " name="salary">
      </div>

      <br>

      <button type="submit" class="btn 
      btn-primary" name="submit">Submit</button>
      <button class="btn btn-primary my-5" input type="button"class="text-light" onclick="history.back()">Go Back!</button>
    </form>

  </div>
</body>

</html>