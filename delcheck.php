<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
}
	
	


	
	$sql="DELETE FROM member1
		  WHERE member_id = '{$_POST['delid']}' AND member_id != '1'";


	
	if ($conn->query($sql) === TRUE) {
    echo "Record deled successfully";
    header("location:management.php");

} else {
    echo "Error updating record: " . $conn->error;
}

		
$conn->close();



?>