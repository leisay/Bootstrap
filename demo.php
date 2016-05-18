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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fancybox.net/js/fancybox-1.3.4/jquery.fancybox-1.3.4.css" rel="stylesheet">
    <!-- js -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="http://fancybox.net/js/fancybox-1.3.4/jquery.fancybox-1.3.4.js"></script>
    <script src="http://fancyapps.com/fancybox/source/jquery.fancybox.js"></script>
    
    
    <!-- icon -->
    <link rel="icon" href="img/L.ico">

</head>
<script>


$(document).ready(function(){
  $("ul.navbar-nav").hide();
    $(".topones").mouseenter(function(){
     $("ul.navbar-nav").show("slow").delay(3000);
    });
    $(".topones").mouseout(function(){
     $("ul.navbar-nav").hide("slow");
    });
});
$(document).ready(function(){
  $("li.dropone").hide();
    $(".glyphicon-triangle-bottom").click(function(){
     $("li.dropone").fadeToggle("slow");
    });
});

$(document).ready(function(){
  $("ul.sidenav").hide();
    $(".glyphicon-menu-hamburger").click(function(){
        $(".glyphicon-menu-hamburger").animate({left: "150px"});
        $("ul.sidenav").fadeToggle("slow");

    });
});


var myCenter=new google.maps.LatLng(23.5, 120.93);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:8,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:"wellcome"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);




$(function () {
    $('#charts').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'TAIPEI',
            data: [15.1, 15.1, 17.3, 20.9, 24.3, 26.7, 28.3, 28.2, 26.6, 23.2, 20.1,21.9]
        }, {
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }]
    });
});



</script>
<style type="text/css">
.FULL{
  width: 100%;
  height: 100%;
}
.top-one {
    width: 300px;
    height: 200px;
    background-image: url(backones.jpg);
    
    -webkit-animation: mymove 30s infinite; /* Chrome, Safari, Opera */
    animation: mymove 30s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    0%   {background-image: url(backones.jpg);}
    33%  {background-image: url(backtwos.jpg);}
    67%  {background-image: url(backthr.jpg);}
    100%   {background-image: url(backones.jpg);}
}

@keyframes mymove {
    0%   {background-image: url(backones.jpg);}
    33%  {background-image: url(backtwos.jpg);}
    67%  {background-image: url(backthr.jpg);}
    100%   {background-image: url(backones.jpg);}
}
.top-one{
  width: 100%;
  height: 960px;
  
  background-size: 100% ,960px;
  
}
.topone{
    margin-top: 200px;
    
    background-size: 1260px ,50px;
    background-repeat: no-repeat;

}
.col-xs-4{
  color: #FFFFFF;
  margin: auto;
  padding-top: 200px;

  }
  .glyphicon-menu-hamburger{
    color: #FFF;
    font-size: 80px;
  }
  .glyphicon-triangle-bottom{
    color: #FFF;
    font-size: 80px;
  }
  .glyphicon-menu-hamburger:hover{
    color: black;
    font-size: 96px;
  }
  .glyphicon-triangle-bottom:hover{
    color: black;
    font-size: 96px;
  }
  .text-one{
    font-size: 100px;
    border: 1px solid #FFFFFF;
    text-decoration:none;
    color: #FFFFFF;
  }
  .text-one:hover{
    color: black;
    text-decoration:none;

  }

  .btn{
    background-color: none;
  }
  .btn-default{
background-color: none;
  }
  .dropone{
    font-size: 40px;
    color: #FFF;
    text-decoration:none;
    list-style-type:none;
  }
  .dropone:hover{
    color: #000000;
    text-decoration:none;
    font-size: 52px;
  }
  a.dropone{
    text-decoration:none;
  }
a.text-one{
    text-decoration:none;
  }
  .sidenav{
    background: #8E8E8E; 
    margin-top: 100px;
    width: 150px;
    height: 600px;
    position: absolute; 
    left: 0; 
    top: 0; 
    bottom: 0; 
    padding-top: 100px;
  }
  .sidenav li {
    list-style-type: none;
  }
  .sidenav a { 
    color: white; 
    text-decoration: none; 
  }
  .sideone{
    display: block; 
    width: 150px; 
    float: left; 
    font-size: 16px; 
    line-height: 48px;
    text-align: center;
    padding-right: 70px;
     
  }
  .sideone:hover{
   color: #484891;
  }
  .botone{
    padding-top: 800px;
    height: 100px;
    width: 100px;
    margin: auto;
    
  }
  .glyphicon-sort-by-attributes-alt{
    font-size: 80px;
    color: #FFF;
  }

  .maga-tit{
    margin: auto;
    width: 1080px;
    height: 100px;
    padding-left: 180px;
    background-color: #BBFFBB;
    
}

.one{   
    margin: auto;
    width: 960px;
    height: 800px;
    padding-left: 180px;
    background-color: #FCFCFC;
    float: left;
}
.pic-one{
    width: 200px;
    height: 300px;
    background-color:   #FDFFFF;
    float: left;

}
.text-two{
    width: 580px;
    height: 200px;
    padding-top: 10px;
    padding-bottom: 10px;
    text-decoration: none ;
}

.margin{
    width: 780px;
    height:300px;
}

.margin:hover{color:    #ACD6FF; font-size: 150%; width: 300px; height: 300px;}
.pic-one>.text-one{padding: 10px;}

.two{
    width: 300px;
    height: 800px;
    display:block;
    background-color: ;
    float: left;
}

.FULLT{
    width: 1440px ;
    height: 800px;
    

}

.Mon-one{
    margin: auto;
    text-align: center;
    width: 150px;
    height: 100px;
    padding-top: 25px;
    padding-bottom: 50px;
    color: #FFFFFF;
    background-color: #CA8EFF;

}
.Mon-one:hover{color: ; margin-left: 150px;}

 .footone{
    margin: auto;
    height: 50px;
    width: 1260px;
    background-color: ;
    float: left;
    
 }
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
.pic-two{
  width: 100%;
  height: 800px;
  
background-size: 100% ,960px;
  background-image: url(backfou.jpg); 
    -webkit-animation: mymove 10s infinite; /* Chrome, Safari, Opera */
    animation: mymoveo 10s infinite;

}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymoveo {
    0%   {background-image: url(backfou.jpg);}
    33%  {background-image: url(backfive.jpg);}
    67%  {background-image: url(backsix.jpg);}
    100%   {background-image: url(backfou.jpg);}
}

@keyframes mymoveo {
    0%   {background-image: url(backfou.jpg);}
    33%  {background-image: url(backfive.jpg);}
    67%  {background-image: url(backsix.jpg);}
    100%   {background-image: url(backfou.jpg);}
}


#aimg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}
#img2 {
  border-radius: 8px;
}
.texta {
    position: absolute;
    padding-right: 180px;
    margin-top: 300px;
    height: 600px;
    width: 800px;
    text-align: center;
    font-size: 68px;
    color: green;
}
.texta:hover{
  color: green;
  text-decoration: none;
}

#aimg:hover {opacity: 0.7;}
.left-one{
  float: left;
  width: 200px;
  height: 200px;
  position: relative;
  margin-top: 10px;
  
}
.left-two{
  padding-top: 70px;
   float: left;
   width: 200px;
  height: 200px;
  margin-top: 20px;
  position: relative;
  
}
.center{
  width: 200px;
  height: 600px;
  position: relative;
    display:block;
    float: left; 
}
.right{
  position: relative;
    display:block;
    float: left; 
   width: 40%;
  height: 600px;
  
}
.left{
  padding-top: 100px;
  width: 15%;
  height: 600px;
  margin: auto;
  display:block;
    float: left; 
}
.centerone{
  width: 200px;
  height: 600px;
  margin: auto;
  display:block;
    float: left; 
}
.left-one:hover{
   transform: rotate(45deg);
  -ms-transform: rotate(45deg); /* IE 9 */
  -webkit-transform: rotate(45deg);
  opacity: 0.5;
  text-align: center;
}
.left-two:hover{
  transform: rotate(300deg);
  -ms-transform: rotate(300deg); /* IE 9 */
  -webkit-transform: rotate(300deg);
  opacity: 0.5;
  text-align: center;
}
.topones{
  height: 200px;
  width: 100% ;
  margin: auto; 
  padding-right: 15px;
  padding-left: 15px;
  color: #fff;
}
.hexagon,.hexagon1,.hexagon2{
    width: 200px;
    height: 110px;
    background: #66B3FF;
    position: relative;
    display:block;
    float: left; 
}


.hexagon:before,.hexagon1:before,.hexagon2:before{
    content: "";
    position: absolute;
    top: -50px;
    left: 0;
    width: 0;
    height: 0;
    border-left: 100px solid transparent;
    border-right: 100px solid transparent;
    border-bottom: 50px solid #66B3FF;
}


.hexagon:after ,.hexagon1:after,.hexagon2:after{  
  content: "";
    position: absolute;
    bottom: -50px;
    left: 0;
    width: 0;
    height: 0;
    border-left: 100px solid transparent;
    border-right: 100px solid transparent;
    border-top: 50px solid #66B3FF;
}


.hexagon2{
  
}
h1{
  text-align: center;
}
a:hover{
  text-decoration: none;
}
#text:hover{
   -webkit-animation: mymove 1s infinite; /* Chrome, Safari, Opera */
    animation: mymovet 1s infinite;
  opacity: 0.5;
}
@-webkit-keyframes mymovet {
    0%   {transform: rotate(90deg);}
    33%  {transform: rotate(180deg);}
    67%  {transform: rotate(270deg);}
    100%   {transform: rotate(360deg);}
}

@keyframes mymovet {
   0%   {transform: rotate(90deg);}
    33%  {transform: rotate(180deg);}
    67%  {transform: rotate(270deg);}
    100%   {transform: rotate(360deg);}
}

</style>

<body>
 
<div class="FULL">
 
<div class="top-one">
  <div class="topones">
      <ul class="nav navbar-nav" >
        <li><a href="demo.php">Home</a></li>
        <li><a href="login.php" class= "loginn">Login</a></li>
        <li><a href="email.php">Talk</a></li>
        <li><a href="demo.php" >Demo</a></li>
        <li><a href="shoptest.php" >Shop</a></li>
        <li><a href="about.php" >Data</a></li>
        <li><a href="manage.php" >Manage</a></li>
        <li><a href="logout.php" class= "logoutt">LogOut</a></li>
      </ul>
       
 </div>
  <div class="col-xs-4">
   <a href="##" class="##">
    <span class="glyphicon glyphicon-menu-hamburger btn-lg"></span></a>
     <ul class="sidenav">
      <li><a href="demo.php" class="sideone">Home</a></li>
      <li><a href="login.php" class="sideone">Manage</a></li>
      <li><a href="email.php" class="sideone">Talk</a></li>
      <li><a href="demo.php" class="sideone">Demo</a></li>
      <li><a href="shoptest.php" class="sideone">Shop</a></li>
      <li><a href="about.php" class="sideone">Data</a></li> 
     </ul>
  </div>

  <div class="col-xs-4">
      <a href="demo.php" class="text-one">
      <span class="text-one">DEMO</span></a>
  </div>

  <div class="col-xs-4">
    <span class="glyphicon glyphicon-triangle-bottom btn-lg"></span>
      <li class="dropone" ><a href="#" class="dropone">Home</a></li>
      <li class="dropone" ><a href="#pic-two" class="dropone">Demo</a></li>
      <li class="dropone" ><a href="#topone" class="dropone">Data</a></li>
  </div>
     

  <div class="botone">
   <a href="#pic-two" class="##">
    <span class="glyphicon glyphicon-sort-by-attributes-alt btn-lg"></span></a>
  </div>


<div class="pic-two" id="pic-two">

  <div class="left">
  <div class="left-two"> 
      <div class="hexagon2">
    <a href="login.php" class="text1"><h1>Login</h1></a>
  </div>
  </div>

  <div class="left-two"> 
      <div class="hexagon2">
    <a href="shoptest.php" class="text1"><h1>Shop</h1></a>
  </div>
  </div>
  </div>

  <div class="left">
      <div class="left-one"> 
  <div class="hexagon1">
    <a href="chat.php" class="text1"><h1>Talk</h1></a>
  </div>
  </div>

   <div class="left-one"> 
  <div class="hexagon1">
    <a href="demo.php" class="text1"><h1>Home</h1></a>
  </div>
  </div>

   <div class="left-one"> 
  <div class="hexagon1">
    <a href="about.php" class="text1"><h1>Data</h1></a>
  </div>
  </div>
</div>

  <div class="left">
     <div class="left-two"> 
  <div class="hexagon2">
    <a href="demo.php" class="text1"><h1>Demo</h1></a>
  </div>
  </div>

   <div class="left-two"> 
  <div class="hexagon2">
    <a href="manage.php" class="text1"><h1>Manage</h1></a>
  </div>
  </div>
</div>

  
  <div class="right">
<a href="demoone.php" class="texta"><p id="text">FancyBox</p> </a> 
<img src="talk.png"  width="600px" height="800px" id = "img2" >
</div>
</div>









<div class="topone" id="topone">
      <ul class="nav navbar-nav" >
        <li><a href="demo.php">Home</a></li>
        <li><a href="#.php" >Login</a></li>
        <li><a href="#.php" >Talk</a></li>
        <li><a href="#.php" >Image</a></li>
        <li><a href="#.php" >Shop</a></li>
        <li><a href="#.php" >About</a></li>
        <li><a href="#.php" >Manage</a></li>
        

      </ul>
       
</div>


<div class="FULLT">
<div class="maga-tit"><h1 id="tit" style="padding-top:20px">2016 MAY</h1></div>
<div class="one">
    <div class="margin">
    <div class="text-two">
     <h2>VIDEO</h2>
      <iframe width="500" height="250" src="http://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
    </div>
    </div>  

    <div class="margin">
    <div class="text-two">
      <h2>GOOGLE MAP</h2>
       <div id="googleMap" style="width:500px;height:250px;"></div>
    </div>
    </div>   
    
    <div class="margin">
    <div class="text-two">
      <h2 style="text-align: center;">HIGHCHARTS</h2>
       <div id="charts" style="width:500px;height:250px;"></div>
    </div>
    </div>  
</div>    

<div class="two">
<div class="Mon-one"><h5 id="jun">JUN</h5></div>
<div class="Mon-one"><h5>FEB</h5></div>
<div class="Mon-one"><h5>MAR</h5></div>
<div class="Mon-one"><h5>APR</h5></div>
<div class="Mon-one"><h5>MAY</h5></div>
<div class="Mon-one"><h5>JUN</h5></div>
<div class="Mon-one"><h5>JUL</h5></div>
<div class="Mon-one"><h5>ARG</h5></div>
<div class="Mon-one"><h5>SEP</h5></div>
<div class="Mon-one"><h5>OCT</h5></div>

</div>

</div>

 <footer>   
    <div class="buttwo">
      <ul class="nav navbar-nav" >
        <li><a href="demo.php">Home</a></li>
        <li><a href="#" >Login</a></li>
        <li><a href="#" >Talk</a></li>
        <li><a href="#" >Image</a></li>
        <li><a href="#" >Shop</a></li>
        <li><a href="#" >About</a></li>
        <li><a href="#" >Manage</a></li>
        

      </ul>
    </div>

<div class="footone"> 
    <P align="center" class="copypadding">&copy; <?php echo date("Y")?></p>
    </div>
</footer>

</div>
</div>




</body>
</html>