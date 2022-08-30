<?php

include 'connectempcre.php';
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body style="background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">

<div class="container">

        <button class="btn btn-primary my-5"><a href="emp_cre.php" class="text-light">Add Employee</a></button>
        
        <button class="btn btn-primary my-5" input type="button"class="text-light" onclick="history.back()">Go Back!</button>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Joining Date</th>
                    <th scope="col">NID No</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM `employee_info`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['Emp_id'];
                        $EName = $row['Emp_name'];
                        $JDate = $row['Join_date'];
                        $nid = $row['NID'];
                        $phone = $row['Phone_no'];
                        $email = $row['Email'];  
                        $add = $row['Address'];
                        $pass = $row['Password'];
                        $Sala = $row['Salary'];
                        


                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $EName . '</td>
                        <td>' . $JDate . '</td>
                        <td>' . $nid . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $email . '</td>
                        <td>' . $add . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $Sala . '</td>
                        

                        <td>
                    <button class= "btn btn-primary my-2"><a href="upemp.php ? upid='.$id.'" class="text-light">Edit</a></button>
                    <button class="btn btn-danger"><a href="delemp.php ? delid='.$id.'" class="text-light">Terminate</a></button>
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