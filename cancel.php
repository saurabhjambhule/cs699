<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db="mysql";
$can_name=$_POST['can_name'];
$can_id=$_POST['can_id'];
$can_bid=$_POST['can_bid'];
$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn) {
	die("connection failed".mysqli_connect_error());
}


$sql ="DELETE FROM `proj_slot` WHERE `id`='$can_bid' AND`init_id`='$can_id' AND `init_name` = '$can_name';";

if($conn->query($sql)=== TRUE){
	echo '<script src="bootstrap/js/bootstrap.min.js"></script>';
echo '<form name="login" action="mypage.php" method="POST">';

echo '<TABLE  ALIGN=center class="table" bgcolour=""> ';
echo '<TR >';

echo '<TD COLSPAN="7" ALIGN=center><strong>';
      echo '    Canceled Successfully.';

       echo ' </strong>   </TD> </TR>';


echo '<TR> <TD COLSPAN="7" ALIGN=center>';
echo '	<input class="btn btn-default" type="submit" value="Back"> ';

echo '</TD></TR></TABLE></form>';

}
else{
	echo '<script src="bootstrap/js/bootstrap.min.js"></script>';
echo '<form name="login" action="mypage.php" method="POST">';

echo '<TABLE  ALIGN=center class="table" bgcolour=""> ';
echo '<TR >';

echo '<TD COLSPAN="7" ALIGN=center><strong>';
      echo '    Invalid Credentials.';

       echo ' </strong>   </TD> </TR>';


echo '<TR> <TD COLSPAN="7" ALIGN=center>';
echo '	<input class="btn btn-default" type="submit" value="Back"> ';

echo '</TD></TR></TABLE></form>';
}
$conn->close();
?>


