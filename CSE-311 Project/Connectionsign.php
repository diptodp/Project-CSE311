<?php

$db = mysqli_connect("localhost","root","","company");

if(!$db)
{
	die ("Database not connected" .mysqli_connect_error());
}

else 
{
	echo "Database connected"."<br>";

}

$User_id=$_POST["uid"];
$First_Name=$_POST["fname"];
$Last_Name=$_POST["lname"];
$Birth_Date=$_POST["bdate"];
$Phone_no=$_POST["phn"];
$Email=$_POST["mail"];
$NID=$_POST["nid"];
$Address=$_POST["add"];
$Password=$_POST["pass"];




//value insertation
$sql = "INSERT INTO
Customer_info( 
`User_id`,
First_Name,
 Last_Name, 
Birth_Date, 
Phone_no,
Email,
NID , 
 `Address`,
 `Password`) VALUES('$User_id','$First_Name','$Last_Name','$Birth_Date',$Phone_no,'$Email',$NID,'$Address','$Password')";
//$sql = "INSERT INTO student_info(id,student_name) VALUES($Student_id  ,'$Student_name')";
if(mysqli_query($db,$sql)){

	echo "Your Registration Is Successful";
}
else
{
	echo "There is an error".mysqli_error($db);
}
?>


