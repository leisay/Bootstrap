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
<body> 
	<?php 
		
		if (isset($_SESSION['member_id'])){
			if($_SESSION['member_id'] == '1'){
			echo "Manage";
			header("location: management.php");
		}
		
		else{
			echo "Custom";
			header("location: custom.php");
		}
		}
		
		else{
			header("location: login.php");
		}

		


	?>
	

</body>
</html>