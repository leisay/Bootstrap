<?php if (!isset($_SESSION)) {
session_start();
include_once("db.php");
}



$price = array($_POST['one'], $_POST['two'], $_POST['thr'],$_POST['fou'],$_POST['fiv'],$_POST['six'],
                $_POST['sev'],$_POST['eig'],$_POST['nin'],$_POST['ten']); 

if(isset($_SESSION['member_id'])){

    $member_id = $_SESSION['member_id'] ;
    $sql = "INSERT INTO shopitem 
                (item_one,item_two,item_thr,item_fou,item_fiv,item_six,item_sev,item_eig,item_nin,item_ten,member_id) 
                VALUES 
                    ('$price[0]','$price[1]','$price[2]','$price[3]','$price[4]','$price[5]',
                        '$price[6]','$price[7]','$price[8]','$price[9]','$member_id')";

    $result = $conn->query($sql);
}

else{
    error_reporting(0);
    echo 'plz login' ;
}


if (is_null($price)){
     echo "Wellcome to Shop" ;
}
else{
//echo $member_id."you buy";
$item = array_sum($price);
//echo "項目為".$item."項" ;
$sum =  array_sum($price)*5;
//echo "金額為".$sum."元" ;

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
.topzero{
    height: 100px;
    width: ;
    background: black;
    margin-bottom: 100px;
}
.wordone{
    color:  #FFFFFF;
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
}.memberinfo:hover {  background:   #E0E0E0 ;   }
</style>
</head>

<body>
<div class="topzero">
    <p class="wordone">WellCome</p>
</div>

<table class="tittle">
<tr>
    <th class="text1">會員編號:<?php echo $member_id."號  總共買了".$item."項商品  金額為".$sum."元" ; ?></th> 
</tr>
</table>
<div class="topone">
    <ul class="nav navbar-nav" >
        <li><a href="shopinfo.php">shopinfo</a></li>
        <li><a href="index.php" >Home</a></li>
    </ul>
</div>  
</body>


</html>