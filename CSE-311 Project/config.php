<?php  
if(!isset($_SESSION)) { 
    session_start(); 
  } 

    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from Login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        
          
        if($count == 1){  
            $_SESSION['user_name']=$username;
                header('location:dashboard.php');  
            } else{  
                // echo "<h1><center> Login failed. Invalid username or password.</center></h1>";  
                header('location:Invalid_admin.php');  
            }     
           
           
        
       
?>  