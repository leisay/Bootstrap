<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
}

$member_id = $_SESSION['member_id'] ;
$sql1 = "SELECT * FROM member1 where member_id = $member_id ";
	$result1 = $conn->query($sql1);
while($row = $result1 -> fetch_assoc()){

	
	$RPassword = $row['Password'] ;
	$Password =$_POST['Password'];
	$newPassword =$_POST['newPassword'];
	$newRePassword =$_POST['RenewPassword'];
	$Email =$_POST['Email'];


	if($Password == $RPassword && $newPassword == $newRePassword){
	$sql = "UPDATE member1 SET Password='$newPassword' , Email='$Email' where member_id = '$member_id' ";
	//$sql = "UPDATE member1 SET Email='$Email' where member_id = '$member_id' ";

	
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("location:custom.php");

} else {
    echo "Error updating record: " . $conn->error;
}

}

		else{
			echo "Fail";
		}
		}
$conn->close();



?>