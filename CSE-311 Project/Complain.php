

<?php
session_start();
$db = mysqli_connect("localhost","root","","company");

if(!$db)
{
	die ("Database not connected" .mysqli_connect_error());
}

$Complain_box=$_POST["complain"];
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d h:i:sa');

$str = $_SESSION['user_name'];

//value insertation
$sql="INSERT INTO
customer_complain( 
`User_ID`,
`Complain_box`,
c_date) VALUES('$str','$Complain_box','$date')";



mysqli_query($db,$sql);
echo '<script type="text/javascript"> alert("We have received your complaint. One of our IT expert will contact you very soon.Thank you for staying with Datanet.");
window.location.href = "u_dashboard.php";
</script>';
 

?>