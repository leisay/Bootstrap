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

        <script >

            var file ;
            var file1;
            var file2;
            var fileReader;
            var fileReader1;
            var fileReader2;
            
            function cfile_change() {
                 
                file = document.getElementById('cfile').files[0];
                if (file) {
                    fileReader = new FileReader();
                    fileReader.onload = openfile;
                }
                    fileReader.readAsDataURL(file);
                }
            
              function cfile_change1() {
                 
                file1 = document.getElementById('cfile1').files[0];
                if (file1) {
                    fileReader = new FileReader();
                    fileReader.onload = openfile1;
                }
                    fileReader.readAsDataURL(file1);
                }

                 function cfile_change2() {
                 
                file2 = document.getElementById('cfile2').files[0];
                if (file2) {
                    fileReader = new FileReader();
                    fileReader.onload = openfile2;
                }
                    fileReader.readAsDataURL(file2);
                }

           /* function cfile_change1() {
                file1 = document.getElementById('cfile1').files[0];
                if (file1) {
                    var message = '檔名：' + file1.name + '\n';
                    message += ('長度：' + file1.size + '\n');
                    message += ('型態：' + file1.type + '\n');
                    message += ('最後修改日期：' + file1.lastModifiedDate + '\n');
                    document.getElementById('filep1').value = message;
                    fileReader = new FileReader();
                    fileReader.onload = openfile1;
                }
            }*/
            function openfile(event) {
                document.getElementById('imgx').src = event.target.result;
                //alert(event.target.result);
            }
            function openfile1(event) {
                document.getElementById('imgx1').src = event.target.result;
                //alert(event.target.result);
            }
             function openfile2(event) {
                document.getElementById('imgx2').src = event.target.result;
                //alert(event.target.result);
            }
            function readFileContent() {
                fileReader.readAsDataURL(file);
            } 
              function readFileContent1() {
                fileReader.readAsDataURL(file1);
            }  
             function readFileContent2() {
                fileReader.readAsDataURL(file2);
            } 
    </script>
</head>
<style type="text/css">
    
.one{
    width: 400px;
    height: 400px;
    background-color: gray;
    margin:0px auto; 
}

.two{
    width: 70px;
    height: 70px;
    padding-left: 10px;
    background-color: red; 
    position: relative;
    float: left;

}


ul li{
     list-style-type: none;
     float: left;
     width: 150px;
     font-size: 11px;
     line-height: 1.8em;
     padding: 5px 10px;
     border-collapse: collapse;

   
}

ul{
    padding-left: 350px;
}


</style>
<body>

<div class="one"></div>


<ul>
    <li>
        <div>
          <input type="file" name="open" id="cfile"    onchange="cfile_change()"   />
<p><img id="imgx" width="150px" height="150px" h/></p><br /></a>
        
    </li>

    <li>
        <div>
          <input type=file id="cfile1"   onchange="cfile_change1()"   />
<p><img id="imgx1" width="150px" height="150px" h/></p><br /></a>
        
    </li>

    <li>
        <div>
          <input type=file id="cfile2"   onchange="cfile_change2()"   />
<p><img id="imgx2" width="150px" height="150px" h/></p><br /></a>
        
    </li>

     
</ul>



<?php  
/*echo 'fileReader.readAsDataURL(file);';
echo 'fileReader.readAsDataURL(file);';
*/
?>
</body>
</html>
