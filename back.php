<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="mysql";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn) {
	die("connection failed".mysqli_connect_error());
}
echo "connected suuccessfully";

$sql ="INSERT INTO `mysql`.`proj_slot` (`time`, `date`, `duration`, `init_name`, `init_id`, `purpose`, `approve`) VALUES ('10:12', '2015-11-29', '1:0', 'ra', 's', 'ram ram ', '8')";

if($conn->query($sql)=== TRUE){
	echo "New record created successfully";
}
else{
	echo "Error: ".$sql ."<br>".$conn->error;
}
$conn->close();
?>