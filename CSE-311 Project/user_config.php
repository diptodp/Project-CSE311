<?php   

session_start();

    include('u_connection.php');  
    $User_id = $_POST['userid'];  
    $Password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $User_id = stripcslashes($User_id);  
        $Password = stripcslashes($Password);  
        $User_id = mysqli_real_escape_string($con, $User_id);  
        $Password = mysqli_real_escape_string($con, $Password);  
      
        $sql = "select *from customer_info where User_id = '$User_id' and Password = '$Password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['user_name']=$User_id;
            header('location:u_dashboard.php');  
        }  
        else{  
            //  echo "<h1><center> Login failed. Invalid User_id or Password.</center></h1>";  
            header('location:Invalidu.php');  
        }     
?>  