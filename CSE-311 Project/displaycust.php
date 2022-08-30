<?php

include 'connectcustcre.php';
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body style="background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">

<div class="container">

        <button class="btn btn-primary my-5"><a href="CustCre.php" class="text-light">Add Customer</a></button>
        
        <button class="btn btn-primary my-5" input type="button"class="text-light" onclick="history.back()">Go Back!</button>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Active Date</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Email</th>
                    <th scope="col">NID</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Current Package</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM `customer_info`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {

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

                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $FName . '</td>
                        <td>' . $LName . '</td>
                        <td>' . $ADate . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $email . '</td>
                        <td>' . $nid . '</td>
                        <td>' . $add . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $curpack . '</td>

                        <td>
                    <button class= "btn btn-primary my-2"><a href="Upcust.php ? upid='.$id.'" class="text-light">Edit</a></button>
                    <button class="btn btn-danger"><a href="delcust.php ? delid='.$id.'" class="text-light">Delete</a></button>
            </td>

                    </tr>';
                    }
                }





                ?>

             





            </tbody>
        </table>



    </div>
    
</body>

</html>