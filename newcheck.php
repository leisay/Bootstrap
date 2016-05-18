<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
}

	$Password =$_POST['Password'];
	$RePassword =$_POST['RePassword'];


	if($Password == $RePassword ){
	$sql="INSERT into `member1` (
        `Account`, `Password`, 
        `Email`, `Birthday`, 
        `Gender`) 
        values (
        '{$_POST['Account']}','$Password',
        '{$_POST['Email']}','{$_POST['Birthday']}',
        '{$_POST['Gender']}')";


	
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("location:management.php");

} else {
    echo "Error updating record: " . $conn->error;
}

}

		else{
			echo "Fail";
		}
		
$conn->close();



?>