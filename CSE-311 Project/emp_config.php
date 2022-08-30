<?php    
session_start();

    include('connection.php');  
    $Emp_id = $_POST['userid'];  
    $Password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $Emp_id = stripcslashes($Emp_id);  
        $Password = stripcslashes($Password);  
        $Emp_id = mysqli_real_escape_string($con, $Emp_id);  
        $Password = mysqli_real_escape_string($con, $Password);  
      
        $sql = "select *from employee_info where Emp_id = '$Emp_id' and Password = '$Password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['user_name']=$Emp_id;
            header('location:Employee_dashboard.php');  
        }  
        else{  
            //  echo "<h1><center> Login failed. Invalid Emp_id or Password.</center></h1>";  
            header('location:invalid_employee.php');  
        }     
?>  