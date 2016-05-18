<?php if (!isset($_SESSION)) {
session_start();
}?>
<!DOCTYPE html>
<html lang="zh">
<!--meta-->
  <meta charset="utf-8">
  <meta name="viewport"    content="width=device-width, initial-scale=1">
  <meta name="keywords"    content="HTML, CSS, framework, bootstrap, front-end, frontend, web development">
  <meta name="description" content="wellcome to this place">
  <meta name="author"      content="leisay">
  <meta name="google-site-verification" content="test" />

  <title>
        Login
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
  
.table{

  margin: auto;
  border-width:5px; 
  border-style:#E0E0E0 ;
  text-align: center;
  background: #F0F0F0;
  margin: 0px auto;
  width:600px; 
  height: 400px;
  margin-top: 10% ;
  padding-top: 80px;

}

p , h6{
  font-weight: bold;
  color:#272727;
}

h6{
  margin-top: 20px;
  margin-bottom: 20px;
}
button {

  background: #d0d0d0;
  font-weight: bold;
  color:  #272727 ;
  margin-left: 30px;

}

footer{
  text-align: center;
}

input{
  margin-left: 50px;
  border-radius: 5px; 
  padding-left: 10px;
  width: 200px;
  height: 30px;
}


a.text1{
  margin: 20px;
  text-decoration: none ;
  color:  #000000 ;
}a.text1:hover {  color:red ;   }

</style>
<script>
</script>
</head>


<body>

  <div class="table">
  <p>LOGIN</p>
  <form action="check.php" method="POST">
  <h6> Account:   <input type ="text" name="Account" placeholder="Account"  required> </h6>
  <h6> Password:  <input type ="password" name="Password" placeholder="Password" required> </h6>

  <button type="submit">login</button> 
  <button type="reset">reset</button></br></br>

  <a href="registeration.php" class="text1">Creative Account</a>
  <a href="#" class="text1">Forget Account</a>
  <a href="index.php" class="text1">Home</a>

  </div>
</body>

<footer>
   &copy; <?php echo date("Y")?>
</footer>
</html>