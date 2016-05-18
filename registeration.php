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
  
.table{
  margin: 20px;
  border-width:5px; 
  border-style:#E0E0E0 ;
  text-align: center;
  background: #F0F0F0;
  margin: 0px auto;
  width:600px; 
  height: 500px;
  margin-top: 0px auto;
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

div.form-group{
  overflow: hidden;
}
input.form-control{
  width: 70%;
}
.well{
  margin-top: 10%;
}
</style>

</head>


<body>
<div class="col-lg-10 navbar-right">
<div class="col-lg-10">
<form class="well" action="check2.php" method="POST" name="myForm">
  <fieldset>
    <legend>Registation</legend>
     
    <div class="form-group" >
      <label for="inputAccount" class="col-lg-2 control-label">Account</label>
      <div class="col-lg-10 ">
      <input type="text" class="form-control" name="Account" placeholder="Account" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <input type="password" class="form-control" name="Password" placeholder="Password" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputRePassword" class="col-lg-2 control-label">Re-Password</label>
      <div class="col-lg-10">
      <input type="password" class="form-control" name="RePassword" placeholder="RePassword" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
      <input type="text" class="form-control" name="Email" placeholder="Email" required>
      </div>
    </div>  

    <div class="form-group ">
      <label for="inputBirthYear"  class="col-lg-2 control-label">Birthday</label>
      <div class="col-lg-10 ">
      <input type='text' name='Birthday' class="form-control" placeholder='格式為2015-12-01'>
      </div>
    </div>

    <div class="form-group">
      <label for="inputgender"class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10 ">
      <input type="radio" name="Gender" value='男'  checked required>男
      <input type="radio" name="Gender" value='女'  checked required>女
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 " align="center">
      <button type="submit" class="btn btn-primary" onclick="">Register</button>
      <button class="btn btn-default" type = "reset" >Cancel</button>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 " align="center">
    <a href="login.php" class="text1">Back</a>
    <a href="index.php" class="text1">Home</a>
      </div>
    </div>
  </fieldset>
</form>
<footer>
   &copy; <?php echo date("Y")?>
</footer>
</div>
</div>
  
</body>

</html>