<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="mysql";
$date_book=$_POST['hid_date'];
$time_book=$_POST['basic'];
$duration_book=$_POST['basic1'];
$init_name_book=$_POST['init_name'];
$init_id_book=$_POST['init_ID'];
$purpose_book=$_POST['purpose'];
$approve_book="pending";
$id=$date_book.$time_book;
$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn) {
	die("connection failed".mysqli_connect_error());
}
echo "connected suuccessfully";

$sql ="INSERT INTO `mysql`.`proj_slot` (`id`,`time`, `date`, `duration`, `init_name`, `init_id`, `purpose`, `approve`) VALUES ('$id','$time_book', '$date_book', '$duration_book', '$init_name_book', '$init_id_book', '$purpose_book ', '$approve_book')";

if($conn->query($sql)=== TRUE){
	echo "New record created successfully";
}
else{
	echo "Error: ".$sql ."<br>".$conn->error;
}
$conn->close();
?>