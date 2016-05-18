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
	$sql = "SELECT * FROM member1 where member_id = $member_id ";
	$result = $conn->query($sql);
?>
<div class="membernav">
	 <li class="text0"> WellCome <?php echo $member_id ?></li>
</div>

<?php
while($row = $result -> fetch_assoc()){
?>


</table>

<div class="col-lg-10 navbar-right">
<div class="col-lg-10">
<form class="well" action="updatecheck.php" method="POST" name="myForm">
  <fieldset>
    <legend>Update</legend>
     
    <div class="form-group" >
      <label for="inputAccount" class="col-lg-2 control-label"><?php echo $row['Account'];?></label>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <input type="password" class="form-control" name="Password" placeholder="Password" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">new-Password</label>
      <div class="col-lg-10">
      <input type="password" class="form-control" name="newPassword" placeholder="new-Password" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputRePassword" class="col-lg-2 control-label">Renew-Password</label>
      <div class="col-lg-10">
      <input type="password" class="form-control" name="RenewPassword" placeholder="RePassword" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><?php echo $row['Email'];?></label>
      <div class="col-lg-10">
      <input type="text" class="form-control" name="Email" placeholder="Email" required>
      </div>
    </div>  

    <div class="form-group ">
      <label for="inputBirthYear"  class="col-lg-2 control-label"><?php echo $row['Birthday'];?></label>  
    </div>

    <div class="form-group">
      <label for="inputgender"class="col-lg-2 control-label"><?php echo $row['Gender'];?></label>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 " align="center">
      <button type="submit" class="btn btn-primary" onclick="">update</button>
      <button class="btn btn-default" type = "reset" >Cancel</button>
      </div>
    </div>
<?php
}
?>
    <div class="form-group">
      <div class="col-lg-10 " align="center">
    <a href="custom.php" class="text1">Back</a>
    <a href="index.php" class="text1">Home</a>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>