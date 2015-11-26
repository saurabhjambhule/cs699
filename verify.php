<?php 
$pass=$_POST['pass'];
if($pass== "admin"){
	header("Location:http://localhost:7888/cs699/adminpage.php");  
	die();

}
else
{
	header('Location: ' . $_SERVER['HTTP_REFERER']); 
}

?>
