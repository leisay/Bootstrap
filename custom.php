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
<style type="text/css">
.topzero{
	height: 100px;
	width: ;
	background: black;
	margin-bottom: 100px;
}
.wordone{
 	color: 	#FFFFFF;
 	text-align: center;
 	padding-top: 30px;
 }
.tableone{
	margin-top: 50px;
	width: 600px;
	height: 400px;
	text-align: center;
}
.tittleone{
	color: red;
	background:#FFFFFF; 
}


.topone{
	height: 50px;
	width: 400px;
	margin: 0px auto; 
	padding-right: 15px;
	padding-left: 15px;

}

.membernav{
	width: 600px;
	margin: 0px auto;
	height: 50px;
	background-color: #F0F0F0;
	text-align: center;
	color: black;
	
}
.text0{
	text-decoration:none;
	padding-top: 15px;
	list-style: none;
}
.text1{
	text-decoration:none;
	padding-top: 10px;
	list-style: none;
}

th,table{
	border-collapse: collapse;
	border: 1px solid #E6CAFF;
	text-align: center;
}
.tittle{
	width: 600px;
	margin: 0px auto;
	height: 100px;
	background-color:#FFFFFF;
	color: blue;
	text-align: center; 
	
}
.memberinfo{
	width: 600px;
	margin: 0px auto;
	height: 50px;
	background-color:#FFFFFF;
	color: black;
	text-align: center; 
}.memberinfo:hover {  background:	#E0E0E0 ;   }


</style>
</head>
<body>
<div class="topzero">
	<p class="wordone">WellCome</p>
</div>
<?php 
	$member_id = $_SESSION['member_id'] ;
	$sql = "SELECT * FROM member1 where member_id = $member_id ";
	$result = $conn->query($sql);

	?>


<div class="membernav">
	 <li class="text0"> WellCome <?php echo $member_id ?></li>
</div>

<table class="tittle">
<tr>
	<th class="text1">member_id</th>
	<th class="text1">Account</th>
	<th class="text1">Password</th>
	<th class="text1">Gender</th>
	<th class="text1">Birthday</th>
	<th class="text1">Email</th>
</tr>

<?php
while($row = $result -> fetch_assoc()){
?>

<tr class="memberinfo">
	<th class="text1"><?php echo stripslashes($row['member_id']);?></th>
	<th class="text1"><?php echo $row['Account'];?></th>
	<th class="text1"><?php echo $row['Password'];?></th>
	<th class="text1"><?php echo $row['Gender'];?></th>
	<th class="text1"><?php echo $row['Birthday'];?></th>
	<th class="text1"><?php echo $row['Email'];?></th>
</tr>
<?php
}
?>
</table>

<div class="topone">
	<ul class="nav navbar-nav" >
 		<li><a href="shopinfo.php">shopinfo</a></li>
        <li><a href="update.php" >update</a></li>
        <li><a href="index.php" >Home</a></li>
    </ul>
</div>	
</body>
</html>
