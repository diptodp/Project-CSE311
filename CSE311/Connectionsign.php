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


$First_Name=$_POST["fname"];
$Last_Name=$_POST["lname"];
$Birth_Date=$_POST["bdate"];
$Phone_no=$_POST["phn"];
$NID=$_POST["nid"];
$Address=$_POST["add"];
$Password=$_POST["pass"];




//value insertation
$sql = "INSERT INTO
Customer_info( 
First_Name,
 Last_Name, 
Birth_Date, 
Phone_no, 
NID , 
 `Address`,
 `Password`) VALUES('$First_Name','$Last_Name','$Birth_Date',$Phone_no,$NID,'$Address','$Password')";
//$sql = "INSERT INTO student_info(id,student_name) VALUES($Student_id  ,'$Student_name')";
if(mysqli_query($db,$sql)){

	echo "Info Added";
}
else
{
	echo "There is an error".mysqli_error($db);
}
?>
