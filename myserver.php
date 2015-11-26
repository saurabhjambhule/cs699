<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db="mysql";
$date_book=$_POST['hid_date'];
$time_book=$_POST['basic'];
$duration_book=$_POST['basic1'];
$init_name_book=$_POST['init_name'];
$init_id_book=$_POST['init_ID'];
$purpose_book=$_POST['purpose'];
$approve_book="success";
$id=$date_book.$time_book;
$conn = mysqli_connect($servername,$username,$password,$db);

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if(!$conn) {
	die("connection failed".mysqli_connect_error());
}


$sql ="INSERT INTO `mysql`.`proj_slot` (`id`,`time`, `date`, `duration`, `init_name`, `init_id`, `purpose`, `approve`) VALUES ('$id','$time_book', '$date_book', '$duration_book', '$init_name_book', '$init_id_book', '$purpose_book ', '$approve_book')";

if($conn->query($sql)=== TRUE){

 echo '<script src="bootstrap/js/bootstrap.min.js"></script>';
echo '<form name="login" action="mypage.php" method="POST">';

echo '<TABLE  ALIGN=center class="table" bgcolour=""> ';
echo '<TR >';

echo '<TD COLSPAN="7" ALIGN=center><strong>';
      echo '    Your Slot ID';

       echo ' </strong>   </TD> </TR>';

echo '<TR> <TD COLSPAN="7" ALIGN=center>';
	echo ' <h1>'.$id.'</h1>';

echo '</TD></TR>';


echo '<TR> <TD COLSPAN="7" ALIGN=center>';
echo '	<input class="btn btn-default" type="submit" value="Thank You"> ';

echo '</TD></TR></TABLE></form>';

}
else{
	echo "Error: ".$sql ."<br>".$conn->error;
}
$conn->close();
?>


