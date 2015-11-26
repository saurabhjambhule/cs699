<?php    
$servername = "localhost";
$username = "root";
$password = "root";
$db="mysql";

  $id1 = $_GET['id1'];

  $conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn) {
	die("connection failed".mysqli_connect_error());
}

$sql = "DELETE from proj_slot WHERE id='$id1'";

if ($conn->query($sql) === TRUE) {
	header('Location: ' . $_SERVER['HTTP_REFERER']); 
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
  
?>