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
	<link href="css/work.css" rel="stylesheet">

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
}
.wordone{
 	color: 	#FFFFFF;
 	text-align: center;
 	padding-top: 30px;
 }
.tableone{
	margin-top: 50px;
	width: 600px;
	height: 600px;
	text-align: center;
}
.tittleone{
	color: red;
	background:#F0F0F0; 
}

.tittletwo{
	
}.tittletwo:hover {  background:	#E0E0E0 ;   }

.topone{
	height: 50px;
	width: 400px;
	margin: 0px auto; 
	padding-right: 15px;
	padding-left: 15px;

}

</style>
</head>
<body>
<div class="topzero">
	<p class="wordone">WellCome</p>
</div>
<?php 
	$member_id = $_SESSION['member_id'] ;
	$sql = "SELECT * FROM shopitem where member_id = $member_id ";
	$result = $conn->query($sql);

	?>

<div class="membernav">
	 <li class="text0"> WellCome <?php echo $member_id ?></li>
</div>

<table class="tittle">
<tr>
	<th class="text1">member_id</th>
	<th class="text1">item_one</th>
	<th class="text1">item_two</th>
	<th class="text1">item_thr</th>
	<th class="text1">item_fou</th>
	<th class="text1">item_fiv</th>
	<th class="text1">item_six</th>
	<th class="text1">item_sev</th>
	<th class="text1">item_eig</th>
	<th class="text1">item_nin</th>
	<th class="text1">item_ten</th>
</tr>

<?php
while($row = $result -> fetch_assoc()){
?>

<tr class="memberinfo">
	<th class="text1"><?php echo stripslashes($row['member_id']);?></th>
	<th class="text1"><?php echo $row['item_one'];?></th>
	<th class="text1"><?php echo $row['item_two'];?></th>
	<th class="text1"><?php echo $row['item_thr'];?></th>
	<th class="text1"><?php echo $row['item_fou'];?></th>
	<th class="text1"><?php echo $row['item_fiv'];?></th>
	<th class="text1"><?php echo $row['item_six'];?></th>
	<th class="text1"><?php echo $row['item_sev'];?></th>
	<th class="text1"><?php echo $row['item_eig'];?></th>
	<th class="text1"><?php echo $row['item_nin'];?></th>
	<th class="text1"><?php echo $row['item_ten'];?></th>
</tr>
<?php
}
?>
</table>

<div class="topone">
	<ul class="nav navbar-nav" >
        <li><a href="custom.php" >back</a></li>
        <li><a href="index.php" >Home</a></li>
    </ul>
</div>	

</body>
</html>