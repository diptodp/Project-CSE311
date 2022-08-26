<?php

include 'connectempcre.php';
$id = $_GET['upid'];
$sql = "Select * from `employee_info` where `Emp_id`='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['Emp_id'];
$EName = $row['Emp_name'];
$JDate = $row['Join_date'];
$phone = $row['Phone_no'];
$email = $row['Email'];
$add = $row['Address'];
$pass = $row['Password'];
$Sala = $row['Salary'];















if (isset($_POST['submit'])) {

  $Emp_id = $_POST["eid"];
  $Emp_name = $_POST["name"];
  $Join_date = $_POST["jdate"];
  $Phone_no = $_POST["phn"];
  $Email = $_POST["mail"];
  $Address = $_POST["add"];
  $Password = $_POST["pass"];
  $Salary = $_POST["salary"];

  $sql = "update `employee_info` set
`Emp_id`='$Emp_id',
Emp_name = '$Emp_name',
Join_date ='$Join_date', 
Phone_no =$Phone_no,
Email ='$Email',
 `Address`='$Address',
 `Password`='$Password',
 Salary = '$Salary' 
 where `Emp_id`= '$id'";

  $result = mysqli_query($con, $sql);


  if ($result) {
    // echo "updated succesfully";
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


  <title>Emp insertation</title>
</head>

<body style="background: #FCF3CF;">
  <div class="container my-5">
    <div class="t1" style=" text-align : center;border: 2px solid black; border-radius: 5px;margin-bottom: 3%;color: green">
      <h3>UPDATE EMPLOYEE INFORMATION</h3>
    </div>
    <form method="post">
      <div class="form-group">
        <label>Employee ID</label>
        <input type="text" class="form-control" placeholder="Enter  Emp ID" name="eid" autocomplete="off" value=<?php echo $id;
                                                                                                                ?>>
      </div>

      <div class="form-group">
        <label>Employee Name</label>
        <input type="text" class="form-control" placeholder="Enter  Employee Name" name="name" autocomplete="off" value="<?php echo $EName;
                                                                                                                          ?>">
      </div>



      <div class="form-group">
        <label>joining Date</label>
        <input type="Date" class="form-control" placeholder="Enter  joining Date" name="jdate" autocomplete="off" value=<?php echo $JDate;
                                                                                                                        ?>>
      </div>

      <div class="form-group">
        <label>Phone No</label>
        <input type="tel" class="form-control" placeholder="Enter  Phone Number" name="phn" autocomplete="off" value=<?php echo $phone;
                                                                                                                      ?>>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter  Email Address" name="mail" autocomplete="off" value=<?php echo $email;
                                                                                                                          ?>>
      </div>



      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter  Address" name="add" autocomplete="off" value="<?php echo $add;
                                                                                                                  ?>">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter  Password" name="pass" autocomplete="off" value=<?php echo $pass;
                                                                                                                        ?>>
      </div>
      <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" placeholder="Enter  Phone-number" name="salary" autocomplete="off" value=<?php echo $Sala;
                                                                                                                          ?>>
      </div>

      <br>

      <button type="submit" class="btn 
      btn-primary" name="submit">Update</button>
    </form>

  </div>
</body>

</html>