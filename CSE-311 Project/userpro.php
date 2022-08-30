<?php

include 'connectcustcre.php';
$id = $_GET['upid'];
$sql = "Select * from `Customer_info` where `User_id`='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['User_id'];
$FName = $row['First_Name'];
$LName = $row['Last_Name'];
$ADate = $row['Active_Date'];
$phone = $row['Phone_no'];
$email = $row['Email'];
$nid = $row['NID'];
$add = $row['Address'];
$pass = $row['Password'];
$curpack = $row['choose'];














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

  $sql = "update `Customer_info` set
`User_id`='$User_id',
First_Name = '$First_Name',
 Last_Name = '$Last_Name', 
Active_Date ='$Active_Date', 
Phone_no =$Phone_no,
Email ='$Email',
NID =$NID, 
 `Address`='$Address',
 `Password`='$Password',
 `choose`='$choose' 
 where `User_id`= '$id'";

  $result = mysqli_query($con, $sql);


  if ($result) {
    // echo "updated succesfully";
    // header('location:u_dashboard.php');
     echo '<script type="text/javascript"> alert("Your registration is complete.")</script>';
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

<body style="background: #FCF3CF;">

  <div class="container my-5">
    <div class="t1" style=" text-align : center;border: 2px solid black; border-radius: 5px;margin-bottom: 3%;color: green">
      <h3>UPDATE CUSTOMER INFORMATION</h3>
    </div>
    <form method="post">
      <div class="form-group">
        <label>User ID</label>
        <input type="text" class="form-control" placeholder="Enter Your User ID" name="uid" autocomplete="off" value=<?php echo $id;
                                                                                                                      ?>>
      </div>

      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="Enter Your First Name" name="fname" autocomplete="off" value="<?php echo $FName;
                                                                                                                            ?>">
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Phone-number" name="lname" autocomplete="off" value=<?php echo $LName;
                                                                                                                            ?>>
      </div>

      <div class="form-group">
        <label>Active Date</label>
        <input type="Date" class="form-control" placeholder="Enter Your Active Date" name="adate" autocomplete="off" value=<?php echo $ADate;
                                                                                                                            ?>>
      </div>

      <div class="form-group">
        <label>Phone No</label>
        <input type="tel" class="form-control" placeholder="Enter Your Phone Number" name="phn" autocomplete="off" value=<?php echo $phone;
                                                                                                                          ?>>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Your Email Address" name="mail" autocomplete="off" value=<?php echo $email;
                                                                                                                              ?>>
      </div>

      <div class="form-group">
        <label>NID</label>
        <input type="number" class="form-control" placeholder="Enter Your NID Number" name="nid" autocomplete="off" value=<?php echo $nid;
                                                                                                                          ?>>
      </div>

      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter Your Address" name="add" autocomplete="off"value="<?php echo $add;
                                                                                                                            ?>">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass" autocomplete="off" value=<?php echo $pass;
                                                                                                                            ?>>
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
              <label style="margin-right: 18px;">5 Mbps </label>

            </div>

            <div>
              <input type="radio" name="pack" value="10 Mbps">
              <label style="margin-right: 10px;">10 Mbps </label>

            </div>

            <div>
              <input type="radio" name="pack" value="15 Mbps">
              <label style="margin-right: 10px;">15 Mbps </label>

            </div>
            <div>
              <input type="radio" name="pack" value="20 Mbps">
              <label style="margin-right: 8px;">20 Mbps </label>

            </div>
          </div>
          <div class="side">
            <div>

              <input type="radio" name="pack" value="40 Mbps">
              <label style="margin-right: 9px;">40 Mbps </label>
            </div>
            <div>
              <input type="radio" name="pack" value="100 Mbps">
              <label>100 Mbps </label>
            </div>
            <div>
              <input type="radio" name="pack" value="12 MbpsE">
              <label>12 MbpsE</label>
            </div>
            <div>
              <input type="radio" name="pack" value="20 MbpsF">
              <label>20 MbpsF</label>
            </div>
          </div>
        </div>
      </fieldset>
      <br>

      <button type="submit" class="btn 
      btn-primary" name="submit">Update</button>
    </form>

  </div>
</body>

</html>