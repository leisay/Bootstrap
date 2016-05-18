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
<!-- Add jQuery library -->




    <!-- css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/#" rel="stylesheet">
    <!-- js -->
<link rel="stylesheet" href="js/uploadify31/uploadify.css">
<link rel="stylesheet" href="js/fancyBox/source/jquery.fancybox.css">
<link rel="stylesheet" href="js/fancyBox/source/helpers/jquery.fancybox-buttons.css">
<link rel="stylesheet" href="js/fancyBox/source/helpers/jquery.fancybox-thumbs.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/#"></script>

    <script src="js/uploadify31/jquery.uploadify-3.1.min.js"></script>
<script src="js/fancyBox/lib/jquery-1.8.2.min.js"></script>
<script src="js/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="js/fancyBox/source/jquery.fancybox.pack.js"></script>
<script src="js/fancyBox/source/helpers/jquery.fancybox-buttons.js"></script>
<script src="js/fancyBox/source/helpers/jquery.fancybox-media.js"></script>
<script src="js/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <!-- icon -->
    <link rel="icon" href="img/L.ico">

</head>
<script>

$(document).ready(function(){
  $(".sidenav").hide();
    $(".glyphicon-cog").click(function(){
     $(".sidenav").fadeToggle("slow");
    });
});


  $(document).ready(function() {
$(".fancybox").fancybox();
    helpers :{
        overlay:{
            closeClick : true
        }
    }
});

</script>
<style type="text/css">

.full {
    width: 600px;
    height: 800px;
    padding-left: 30%;
    padding-top: 10%;
    
   
}

.title{
    width: 600px;
    height: 150px;
    background-color:   #AAAAFF;
    border-style:ridge;
    border-radius: 8px;
    
}
.listone{
 width: 600px;
 height: 650px;
 border-style:ridge;
border-radius: 8px;
}

.navbar-nav{
    padding-left: 30%;
    padding-top: 40px;
}
.leftone{
    width: 50px;
    height: 50px;
    padding-top: 10px; 
    padding-left: 10px;
}
.listtwo{
    height: 50px;
    border-style: inset;
}

.listthr{
    height: 150px;
}
.listthr:hover{
    background-color: #F0F0F0;
}
.glyphicon-home{
    font-size: 40px;
}
.glyphicon-phone{
    font-size: 40px;
}
.glyphicon-phone-alt{
    font-size: 40px;
}
.glyphicon-option-horizontal{
    font-size: 40px;    
}
.glyphicon-cog{
    font-size: 20px;
}

 .sideone{
    height: 30px;
    width: 80px; 
    font-size: 12px; 
   
    background-color: #FFF;
    display: block;
     
  }
  .sideone:hover{
   background-color: #F0F0F0;
   text-decoration: none;
  }
  li{
    list-style-type:none;
  }
  .footone{
    margin: auto;
    height: 50px;
    width: 1260px;
    background-color: ;
    float: left;
    
 }
</style>

<body>

<div class="full">
 <div class="title">

    <div class="leftone">
        <a href="##" class="##">
    <span class="glyphicon glyphicon-cog"></span></a>
        <ul class="sidenav">
      <li><a href="#" class="sideone">hello</a></li>
      <li><a href="#" class="sideone">!!!</a></li>
      <li><a href="#" class="sideone">waring</a></li>
      <li><a href="#" class="sideone">message</a></li>
      <li><a href="#" class="sideone">title</a></li>
      <li><a href="#" class="sideone">logout</a></li> 
     </ul>
    </div>
     <ul class="nav navbar-nav" >
        <li><a href="demo.php" class="glyphicon glyphicon-home"></a></li>
        <li><a href="#" class="glyphicon glyphicon-phone"></a></li>
        <li><a href="#" class="glyphicon glyphicon-phone-alt"></a></li>
        <li><a href="#" class="glyphicon glyphicon-option-horizontal"></a></li>
    </ul>
 </div>
<div class="listone">
    <div class="listtwo">
        
    </div>
     <div class="listthr">
         <a class="fancybox" rel="fancybox" href="backones.jpg"><img src="backones.jpg" alt="" width="600" height="140" /></a>
     </div>
     <div class="listthr">
         <a class="fancybox" rel="fancybox" href="backtwos.jpg"><img src="backtwos.jpg" alt="" width="600" height="140"/></a>
     </div>
     <div class="listthr">
         <a class="fancybox" rel="fancybox" href="backthr.jpg"><img src="backthr.jpg" alt=""   width="600" height="140"/></a>
     </div>
     <div class="listthr">
         <a class="fancybox" rel="fancybox" href="backfou.jpg"><img src="backfou.jpg" alt=""width="600" height="140" /></a>
     </div>
 </div>

</div>


</body>
</html>


<?php



?> 