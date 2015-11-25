<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="mysql";
$date_book=$_POST['today'];
$time_book=$_POST['basic'];
$duration_book=$_POST['basic1'];
$init_name_book=$_POST['init_name'];
$init_id_book=$_POST['init_ID'];
$purpose_book=$_POST['purpose'];
$approve_book="8";
echo $init_name_book;
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