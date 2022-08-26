

<?php
$db = mysqli_connect("localhost","root","","company");

if(!$db)
{
	die ("Database not connected" .mysqli_connect_error());
}



$User_ID=$_POST["user_name"];
$Complain_box=$_POST["complain"];




//value insertation
$sql="INSERT INTO
customer_complain( 
`User_ID`,
`Complain_box`) VALUES('$User_ID','$Complain_box')";
//$sql = "INSERT INTO student_info(id,student_name) VALUES($Student_id  ,'$Student_name')";
if(mysqli_query($db,$sql)){

	echo '<script type="text/javascript"> alert("We have received your complaint. One of our IT expert will contact you very soon.Thank you for staying with Datanet.")</script>';
	
}
else
{
	// echo "There is an error".mysqli_error($db);
	echo'<script type="text/javascript"> alert("Your Complain has already exist")</script>';
}
?>