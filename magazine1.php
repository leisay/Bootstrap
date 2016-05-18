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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- js -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/#"></script>
    <!-- icon -->
    <link rel="icon" href="img/L.ico">

</head>
<script>
/*$(document).ready(function(){
    $(".dropdown").mousedown(function(){
        $(this).css("background-color", "#CAFFFF");
    });
});



</script>
<style type="text/css">
 .butone,.topone{
    height: 50px;
    width: 1260px ;
    margin: ; 
    padding-right: 15px;
    padding-left: 200px;
}
.topone{
    background: 	#CAFFFF ;
    background-size: 1260px ,50px;
    background-repeat: no-repeat;

}
.dropdown{
	float: right;
	width: ;
	height: 50px;
	color:#0072E3;
	background-color:#CAFFFF ; 
	padding-top: 10px;
	
}

.dropdown-toggle{
	background: 	#CAFFFF ;
	color: 	#0072E3;
	border-color: #CAFFFF;
}.dropdown-toggle:hover{color: 	#0072E3;}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 10px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #2894FF;
  background-color: #CAFFFF;
  border-color: #CAFFFF;
}
.btn-primary:disabled,
.btn-primary[disabled] {
  background-color: #CAFFFF;
  background-image: none;
}
.btn-primary {
  background-image: -webkit-linear-gradient(top, #CAFFFF 0%, #CAFFFF 100%);
  background-image: -o-linear-gradient(top, #CAFFFF 0%, #CAFFFF 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#CAFFFF), to(#CAFFFF));
  background-image: linear-gradient(to bottom, #CAFFFF 0%, #CAFFFF 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#CAFFFF', endColorstr='#CAFFFF', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  background-repeat: repeat-x;
  border-color: #CAFFFF;
}

.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  background-image: -webkit-linear-gradient(top, #CAFFFF 0%, #CAFFFF 100%);
  background-image: -o-linear-gradient(top, #CAFFFF 0%, #CAFFFF 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#CAFFFF), to(#CAFFFF));
  background-image: linear-gradient(to bottom, #CAFFFF 0%, #CAFFFF 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#CAFFFF', endColorstr='#CAFFFF', GradientType=0);
  background-color: #CAFFFF;
}

.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  background-color: #CAFFFF;}


.btn {
background-color: #CAFFFF;}
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
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown 
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>

 </div>




</body>
</html>