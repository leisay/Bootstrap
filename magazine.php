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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/#"></script>

    <!-- icon -->
    <link rel="icon" href="img/L.ico">

</head>
<script>
/*$(document).ready(function(){
    $("#jun").mousedown(function(){
        $("#tit").hide();
        $("#tit").after("<h1>JUN</h1>");
    });
});



</script>
<style type="text/css">
.maga-tit{
    margin: auto;
    width: 1080px;
    height: 100px;
    padding-left: 180px;
    background-color: #BBFFBB;
    
}

.one{   
    margin: auto;
    width: 960px;
    height: 800px;
    padding-left: 180px;
    background-color: #FCFCFC;
    float: left;
}
.pic-one{
    width: 200px;
    height: 300px;
    background-color:   #FDFFFF;
    float: left;

}
.text-one{
    width: 580px;
    height: 200px;
    padding-top: 10px;
    padding-bottom: 10px;
    text-decoration: none ;
}

.margin{
    width: 780px;
    height:300px;
}

.margin:hover{color:    #ACD6FF; font-size: 150%; width: 300px; height: 300px;}
.pic-one>.text-one{padding: 10px;}

.two{
    width: 300px;
    height: 800px;
    display:block;
    background-color: ;
    float: left;
}

.FULL{
    width: 1440px ;
    height: 800px;
}

.Mon-one{
    margin: auto;
    text-align: center;
    width: 150px;
    height: 100px;
    padding-top: 25px;
    padding-bottom: 50px;
    color: #FFFFFF;
    background-color: #CA8EFF;

}
.Mon-one:hover{color: ; margin-left: 150px;}

 .footone{
    margin: auto;
    height: 50px;
    width: 1260px;
    background-color: ;
    float: left;
    
 }
 .butone,.topone{
    height: 50px;
    width: 1260px ;
    margin: ; 
    padding-right: 15px;
    padding-left: 200px;
}
.topone{
    background: url(backone.jpg) top no-repeat ;
    background-size: 1260px ,50px;
    background-repeat: no-repeat;

}

.butone{
    padding-top: 200px;
    margin: auto;
    padding-left: ;
    
}
</style>
<body>
<div class="topone">
      <ul class="nav navbar-nav" >
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php" >Login</a></li>
        <li><a href="email.php" >Talk</a></li>
        <li><a href="image.php" >Image</a></li>
        <li><a href="shoptest.php" >Shop</a></li>
        <li><a href="about.php" >About</a></li>
        <li><a href="manage.php" >Manage</a></li>
        <li><a href="logout.php" >LogOut<?php //echo $_SESSION['member_id']; ?></a></li>

      </ul>
       
</div>
<div class="FULL">
<div class="maga-tit"><h1 id="tit" style="padding-top:20px">2016 APR</h1></div>
<div class="one">
    <div class="margin">
    <div class="pic-one">
        <img src="img/a.jpg" style="width:200px;height:200px"></div>
    <div class="text-one">
        <h2>5 Terre</h2>
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
    
    </div>
    </div>   
 <div class="margin">
    <div class="pic-one">
        <img src="img/a.jpg" style="width:200px;height:200px"></div>
    <div class="text-one">
        <h2>5 Terre</h2>
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
    
    </div>
    </div>   
 <div class="margin">
    <div class="pic-one">
        <img src="img/a.jpg" style="width:200px;height:200px"></div>
    <div class="text-one">
        <h2>5 Terre</h2>
  <p >
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
    
    </div>
    </div>   




</div>    

<div class="two">
<div class="Mon-one"><h5 id="jun">JUN</h5></div>
<div class="Mon-one"><h5>FEB</h5></div>
<div class="Mon-one"><h5>MAR</h5></div>
<div class="Mon-one"><h5>APR</h5></div>
<div class="Mon-one"><h5>MAY</h5></div>

</div>

</div>

 <footer>   
    <div class="butone">
      <ul class="nav navbar-nav" >
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php" >Login</a></li>
        <li><a href="email.php" >Talk</a></li>
        <li><a href="image.php" >Image</a></li>
        <li><a href="shoptest.php" >Shop</a></li>
        <li><a href="about.php" >About</a></li>
        <li><a href="manage.php" >Manage</a></li>
        <li><a href="logout.php" >LogOut<?php //echo $_SESSION['member_id']; ?></a></li>

      </ul>
    </div>

<div class="footone"> 
    <P align="center" class="copypadding">&copy; <?php echo date("Y")?></p>
    </div>
</footer>
</body>
</html>
