<?PHP

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "test";

$time = date("Y:m:d H:i:s",time()+28800);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="INSERT into `chat` (
        `author`, `content`, 
        `time`) 
        values (
        '{$_POST['author']}','{$_POST['content']}',
        '$time')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Author:".$row["author"]."";
        echo "<br> Content:".$row["content"]."";
        echo "<br> time:".$row["time"]."";
       
    }
} else {
    echo "Account or Password Fail";
    header("location:chat.php");
}

$conn -> close();
header("location:chat.php");

?>