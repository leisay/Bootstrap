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
}
</style>
<body>

<div class="shopline">
    Wellcome
</div>
<?php 
$money = 5;
 ?>


<div class="fastline">
<form action="shoptest2.php" method="post">
<ul>
    <li>
        <div>
          <a href="shopitem.php" name="itemone">  <img src="img/a.JPG" width="150px" height="150px"  ><br /></a>
        </div>
        <P class="text1">price：$<?php  echo $money;  ?></P>
        <div class="text1">
        <input type="number" name="one" min = 1 max =10 step=1 >
        </div>
    </li>

    <li>
        <div>
            <a href="shopitem.php" name="itemtwo">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="two" min = 1 max =10 step=1 >
        </div>
    </li>

     <li>
        <div>
           <a href="shopitem.php" name="itemthr">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="thr" min = 1 max =10 step=1 >
        </div>
    </li>

     <li>
        <div>
           <a href="shopitem.php" name="itemfou">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="fou" min = 1 max =10 step=1 >
        </div>
    </li>

     <li>
        <div>
            <a href="shopitem.php" name="itemfiv">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="fiv" min = 1 max =10 step=1 >
        </div>
    </li>
</ul>

<ul>
    <li>
        <div>
            <a href="shopitem.php" name="itemsix">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="six" min = 1 max =10 step=1 >
        </div>
    </li>

    <li>
        <div>
           <a href="shopitem.php" name="itemsev">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="sev" min = 1 max =10 step=1 >
        </div>
    </li>

     <li>
        <div>
           <a href="shopitem.php" name="itemeig">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="eig" min = 1 max =10 step=1 >
        </div>
    </li>

     <li>
        <div>
            <a href="shopitem.php" name="itemnin">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="nin" min = 1 max =10 step=1 >
        </div>
    </li>

     <li>
        <div>
           <a href="shopitem.php" name="itemten">  <img src="img/a.JPG" width="150px" height="150px"  /><br /></a>
        </div>
        <P class="text1">price：$5</P>
        <div class="text1">
        <input type="number" name="ten" min = 1 max =10 step=1 >
        </div>
    </li>
</ul>
<div class="submitdiv">
        <input type="submit"  value="加入購物">
        <input type ="reset"  value="取消">
       <a href="index.php" class="text1">Home</a><?php //echo $_SESSION['member_id']; ?>
    </div>
</form>
    
</div>


</body>
</html>

