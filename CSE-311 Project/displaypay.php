<?php

$con= mysqli_connect("localhost","root","","company");
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body style="background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">

<div class="container">

<button class="btn btn-primary my-5" input type="button"class="text-light" onclick="history.back()">Go Back!</button>
<button class="btn btn-primary my-5"><a href="login.php" class="text-light">Logout</a></button>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Package</th>
                    <th scope="col"> Billing Month</th>
                    <th scope="col">Card NO</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM `customer_bill`";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['Full_name'];
                        $email = $row['E_mail'];
                        $userid = $row['User_ID'];
                        $packa = $row['Package'];
                        $bilm = $row['Month'];
                        $carno = $row['Card_no'];
                        
                        


                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $email . '</td>
                        <td>' . $userid . '</td>
                        <td>' . $packa. '</td>
                        <td>' . $bilm . '</td>
                        <td>' . $carno . '</td>
                       
           

                    </tr>';
                    }
                }





                ?>

             





            </tbody>
        </table>



    </div>
    
</body>

</html>