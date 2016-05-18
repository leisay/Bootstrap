<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
  

  //echo $_SESSION["user_id"];
//echo $_SESSION["member_id"];
if(isset($_SESSION['member_id'])){

	$member_id = $_SESSION['member_id'] ;
    $sql1 = "SELECT * FROM member1 where member_id = $member_id ";
	$result1 = $conn->query($sql1);
	while($row = $result1 -> fetch_assoc()){
    }
   
}

else{
    error_reporting(0);
    echo 'plz login' ;
}


}?>
<!DOCTYPE html>

<html lang="zh">
<head>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1">
    <meta name="keywords"    content="HTML, CSS, framework, bootstrap, front-end, frontend, web development">
    <meta name="description" content="wellcome to this place">
    <meta name="author"      content="leisay">
    <meta name="google-site-verification" content="test" />

    <title>
                wellcome
    </title>

    <!-- css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css' rel='stylesheet">
    <link href="css/#" rel="stylesheet">

    <!-- js -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/#"></script>

    <!-- icon -->
    <link rel="icon" href="img/L.ico">

</head>


<style type="text/css">
ul{
     overflow: hidden;
 }
ul li{
     list-style-type: none;
     float: left;
     width: 150px;
     font-size: 11px;
     line-height: 1.8em;
     padding: 5px 10px;
     border-collapse: collapse;
    border: 1px solid #E6CAFF;
    text-align: center;
}
	
.shopline{
    padding-top: 40px;
    height: 100px;
    width: auto;
    text-align: center;
    background: black;
    color: white;
}
.fastline{
    padding-top: 100px;
    width:960px;
    height: 760px;
    margin:0px auto; 
    padding-right: 15px;
    padding-left: 15px;
}
.submitdiv{
    padding-top: 50px;
    float: right;
}
.text1{
    text-align: center;
     margin:0px auto; 
     width:800px;
}
.chat-line{
    padding-top: 50px;
    width:200px;
    margin: 0px auto;

}
.button{
float: right;
}
.line{
    margin-top: 40px;
    border: 1px solid green;
  
}
.chatinfo{
  margin: 20px;
  border-width:5px; 
  border-style:#E0E0E0 ;
  text-align: center;
  background: #F0F0F0;
  margin: 0px auto;
  width:200px; 
  height: 200px;
  margin-top: 0px auto;
  padding-top: 80px;

}
.text2{
    color: blue;
    text-align: center;
    margin:0px auto; 
    float: right;

}
.say-div{
    margin:0px auto;
    width:100px;
}
.container{
      width:960px;
    height: 760px;
    margin:0px auto; 
}
</style>
<body>

<div class="shopline">
    Wellcome
</div>

<?php

$id1 = isset($_GET['id']) ? $_GET['id'] : '';
//$author = "SELECT author FROM chat where user_id = $id1" ;
//echo $id1;

$sql = "SELECT * FROM chat WHERE user_id = $id1 " ;
//$AAA = "SELECT Account FROM member1 WHERE Account = $author  " ;
    $result = $conn->query($sql);

while($row = $result -> fetch_assoc()){
			
?>

<table>
<tr>
    <th class="text1">author: <?php  echo $row["author"]."</br>";?></th>
</tr>
<tr>
    <th class="text1">content: <?php  echo $row["content"]."</br>";?></th>
</tr>
<tr>
    <th class="text1">time: <?php  echo $row["time"]."</br></br>";?></th>
</tr>
</table>
<?php
}

?>

<?php
$member_id = $_SESSION['member_id'] ;
$sql3 = "SELECT * FROM member1 where member_id = $member_id ";

    $result3 = $conn->query($sql3);

while($row = $result3 -> fetch_assoc()){
       
?>

<form action="recheck.php" method="post">

<div class="chat-line">
<h6> author: <?php  echo $row["Account"];?></h6>
<h6> content: <textarea name="content" placeholder="content..."  rows="5" required></textarea></h6>
<button type="submit" class="button">send</button> 
</div>
<div class="line"></div>
</form>
<?php
}

?>

<div></div>

<?php


$sql2 = "SELECT * FROM chatre  order by time desc";
    $result2 = $conn->query($sql2);

    
while($row = $result2 -> fetch_assoc()){
?>



<table>

<tr>
    <th class="text1">content: <?php  echo $row["content"]."</br>";?></th>
</tr>
<tr>
    <th class="text1">time: <?php  echo $row["time"]."</br></br>";?></th>
</tr>
</table>

<?php
}
?>
<div class="topone">
  <ul class="nav navbar-nav" >
        <li><a href="index.php" >Home</a></li>
        <li><a href="chat.php" >BACK</a></li>
    </ul>
</div>
</body>
</html>