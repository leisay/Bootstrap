<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
}

if(isset($_SESSION['member_id'])){

	$member_id = $_SESSION['member_id'] ;
    $sql = "SELECT * FROM member1 where member_id NOT NULL ";
	$result = $conn->query($sql);
	while($row = $result -> fetch_assoc()){
    }
    header("location:sayone.php");
}

else{
    error_reporting(0);
    echo 'plz login' ;
}








?>