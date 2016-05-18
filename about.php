<?php if (!isset($_SESSION)) {
session_start();}?>
<?php
//----- 定義要擷取的網頁地址
$url = "http://espn.go.com/nba/";
 
//----- 讀取網頁源始碼
$fp = file_get_contents($url);
 
//----- 擷取 title 資訊
preg_match("/<title>(.*)<\/title>/s", $fp, $match);
$title = $match[1];
 
//----- 擷取 Description 及 Keywords
$metatag = get_meta_tags($url);
$description = $metatag["description"];
$keywords = $metatag["keywords"];

 
//----- 印出結果



$text=file_get_contents("http://www.nba.com/games/20160502/ATLCLE/gameinfo.html");
$text1=file_get_contents("http://www.nba.com/games/20160509/TORMIA/gameinfo.html");
//preg_match('/<table[^>]+id=\"nbaGITeamStats\"[^>]*>(.*?) <\/table>/si',$text, $title1);
//preg_match('/<div[^>]+id=\"toptwo\"[^>]*>(.*?) <\/div>/s',$text, $title2);
preg_match_all('/<table[^>]+id=\"nbaGITeamStats\"[^>]*>(.*?) <\/table>/si',$text, $title2);
preg_match_all('/<table[^>]+id=\"nbaGITeamStats\"[^>]*>(.*?) <\/table>/si',$text1, $title3);
//mb_substr(從哪個字串擷取, 從第幾個位元, 到第幾個位元,文字編碼);
//echo mb_substr($title1[0], 50, 100,"UTF-8");
//print($title1[0]);
//print($title2[0][0]);
//print($title2[0][1]);
//echo mb_substr($title1[0], 50, 100,"UTF-8");
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

    <!-- js -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- icon -->
	<link rel="icon" href="img/L.ico">

</head>
<script>
</script>
<style type="text/css">
.buttwo,.topone{
    height: 50px;
    width: 1260px ;
    margin: ; 
    padding-right: 15px;
    padding-left: 200px;
}

.buttwo{
    padding-top: 200px;
    margin: auto;
    padding-left: ;
    
}
.footone{
    margin: auto;
    height: 50px;
    width: 1260px;
    background-color: ;
    float: left;
    
 }
 td{
 	text-align: right;
 	padding-left: 10px;
  color: black;
 }
 .b{
color: black;
 }
  .b:hover{
    text-decoration: none;
    color: black;
 }


</style>
<body>

<div class="container">
  <h2>DATA TABs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">GAME ONE</a></li>
    <li><a data-toggle="tab" href="#menu2">GAME TWO</a></li>
    <li><a data-toggle="tab" href="#menu3">GAME THREE</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>TODAY</h3>
      <?php echo "URL: $url </br>";
			echo "Title: $title </br>";
			echo "Description: $description </br>";
			echo "Keywords: $keywords </br>";?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>GAME 1</h3>
      <?php print($title2[0][0]);
			print($title2[0][1]);?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>GAME 2</h3>
      <?php print($title3[0][0]);
			print($title3[0][1]);?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>GAME 3</h3>
      <p>to be continue...</p>
    </div>
  </div>
</div>

<footer>   
    <div class="buttwo">
      <ul class="nav navbar-nav" >
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>

<div class="footone"> 
    <P align="center" class="copypadding">&copy; <?php echo date("Y")?></p>
    </div>
</footer>

</div>
</body>


