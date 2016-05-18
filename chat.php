<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
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

<div class="container">
<form action="chatcheck.php" method="post">

<div class="chat-line">
<h6> author:  <input type="text" name="author" placeholder="author" required></h6>
<h6> content: <textarea name="content" placeholder="content..."  rows="5" required></textarea></h6>
<button type="submit" class="button">send</button> 
</div>
<div class="line"></div>
</form>
<?php
$sql = "SELECT * FROM chat order by time desc";
    $result = $conn->query($sql);

    
while($row = $result -> fetch_assoc()){
?>

<table class="chatinfo" >
<tr>
    <th class="text1">author: <?php  echo $row["author"]."</br>";?></th>
</tr>

<tr>
    <th class="text1">content: <?php  echo $row["content"]."</br>";?></th>
</tr>
<tr>
    <th class="text1">time: <?php  echo $row["time"]."</br></br>";?></th>
</tr>

<?php // echo $row["user_id"]."</br>";

$_SESSION["user_id"] = $row["user_id"] ;

//echo $_SESSION["user_id"];
?>
</table>
<div class="say-div">
  <a href="sayone.php?id=<?php echo $_SESSION["user_id"];?>"  class="text2">say</a> 
</div>

<div class="line"></div>


<?php
}
  //<a href="sayone.php?id=<?php echo $_SESSION['member_id'];"  class="text2">say</a> 
?>
</div>
<div class="topone">
  <ul class="nav navbar-nav" >
        <li><a href="index.php" >Home</a></li>
    </ul>
</div>
</body>
</html>
