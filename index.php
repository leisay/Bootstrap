<?php if (!isset($_SESSION)) {
session_start();
}


    $hit = file_get_contents("count.txt");
    file_put_contents("count.txt", ((int)$hit) + 1 );

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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="css/index.css" rel="stylesheet">
    <!-- js -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- icon -->
	<link rel="icon" href="img/L.ico">

</head>
<script>

var message = "<?php echo $_SESSION['member_id']; ?>";
$(document).ready(function(){ 
    var x = $(message).text().trim(); 
    if (x > 0 ) { 
    	$(".logoutt").hide(); 
        $(".loginn").show(); 
        
    } 
    else { 
    	$(".loginn").hide(); 
        $(".logoutt").show(); 
        
    } 
});


</script>
<style type="text/css">


</style>
<body>

<div class="topzero">
	<p class="wordone">WellCome</p>
</div>

<div class="topone">
      <ul class="nav navbar-nav" >
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php" class= "loginn">Login</a></li>
        <li><a href="email.php">Talk</a></li>
        <li><a href="demo.php" >Demo</a></li>
        <li><a href="shoptest.php" >Shop</a></li>
        <li><a href="about.php" >Data</a></li>
        <li><a href="manage.php" >Manage</a></li>
        <li><a href="logout.php" class= "logoutt">LogOut</a></li>
        <li><a href="" class= "">參訪人數:<?php echo file_get_contents("count.txt"); ?></a></li>
      </ul>
       
</div>

<div class="allview">
	
	<div class="hexagon2">
		<a href="login.php" class="text1"><h1>Login</h1></a>
	</div>
	<div class="hexagon2">
		<a href="shoptest.php" class="text1"><h1>Shop</h1></a>
	</div>

<div class="toptwo"></div>

	<div class="hexagon1">
		<a href="chat.php" class="text1"><h1>Talk</h1></a>
	</div>
	<div class="hexagon1">
		<a href="index.php" class="text1"><h1>Home</h1></a>
	</div>
	<div class="hexagon1">
		<a href="about.php" class="text1"><h1>Data</h1></a>
	</div>

<div class="toptwo"></div>

	<div class="hexagon2">
		<a href="demo.php" class="text1"><h1>Demo</h1></a>
	</div>
	<div class="hexagon2">
		<a href="manage.php" class="text1"><h1>Manage</h1></a>
	</div>
</div>
</body>

<footer>
    <div class="footone"> 
    <P align="center" class="copypadding">&copy; <?php echo date("Y")?></p>
    </div>
</footer>


</html> 

