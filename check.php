<?php if (!isset($_SESSION)) {
session_start();
}

$Account  = $_POST['Account'];
$Password = $_POST['Password'];

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "test";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT * FROM `member1` Where Account = '$Account' AND Password = '$Password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$userid = $row["member_id"];
    	$_SESSION['member_id'] = $userid;
    	echo "<br>well come! member:".$row["member_id"]."";
    	echo "<br> Account:".$row["Account"]."";

    	header("location: index.php");
        
       
    }
} else {
    echo "Account or Password Fail";
}




$conn -> close();




?>