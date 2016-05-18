<?PHP
/*
$Account 	= $_POST['Account'];
$Password 	= $_POST['Password'];
$RePassword = $_POST['RePassword'];
$Email 		= $_POST['Email'];
$Birthday 	= $_POST['Birthday'];
$Gender		= $_POST['Gender'];
*/
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql="INSERT into `member1` (
        `Account`, `Password`, 
        `Email`, `Birthday`, 
        `Gender`) 
        values (
        '{$_POST['Account']}','{$_POST['Password']}',
        '{$_POST['Email']}','{$_POST['Birthday']}',
        '{$_POST['Gender']}')";



//$sql = "INSERT INTO shop (Account,Password,Email,Birthday,Gender) VALUES ('$Account','$Password','$Email','$Birthday','$Gender')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Account:".$row["Account"]."";
        echo "<br> Password:".$row["Password"]."";
        echo "<br> Email:".$row["Email"]."";
       
    }
} else {
    echo "Account or Password Fail";
    header("location:registeration.php");
}

$conn -> close();


?>