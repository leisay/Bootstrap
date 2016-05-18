<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
}
?>
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

</style>
</head>
<body>
<div class="topzero">
	<p class="wordone">WellCome</p>
</div>
	<?php 
	
	$sql = "SELECT * FROM `member1` ORDER BY member_id ";
	//$result = $conn->query($sql);
	 $result=mysqli_query($conn,$sql) or die_content(mysqli_error($conn)."檢索資料失敗");

	?>

<div class="membernav">
	 <li class="text0"> WellCome admin</li>
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
<form  action="delcheck.php" method="POST" name="myForm">
<div class="form-group">
      <div class="col-lg-10 " align="center">
      enter:<input type="text" name="delid" placeholder="number">
      <button type="submit" class="btn btn-primary" onclick="">del</button>
      <button class="btn btn-default" type = "reset" >Cancel</button>
      </div>
    </div>
    </form>
<div class="topone">
	<ul class="nav navbar-nav" >
 		<li><a href="management.php">back</a></li>
        <li><a href="index.php" >Home</a></li>
    </ul>
</div>		

</body>
</html>