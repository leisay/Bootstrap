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

            var file;
            var file1;
            var fileReader;
            var fileReader1;
            function cfile_change() {
                file = document.getElementById('cfile').files[0];
                if (file) {
                    var message = '檔名：' + file.name + '\n';
                    message += ('長度：' + file.size + '\n');
                    message += ('型態：' + file.type + '\n');
                    message += ('最後修改日期：' + file.lastModifiedDate + '\n');
                    document.getElementById('filep').value = message;
                    fileReader = new FileReader();
                    fileReader.onload = openfile;
                }
            }
            function cfile_change1() {
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
            }
            function openfile(event) {
                document.getElementById('imgx').src = event.target.result;
                //alert(event.target.result);
            }
            function openfile1(event) {
                document.getElementById('imgx1').src = event.target.result;
                //alert(event.target.result);
            }
            function readFileContent() {
                fileReader.readAsDataURL(file);
            } 
              function readFileContent1() {
                fileReader.readAsDataURL(file1);
            }  
    </script>
</head>
<body>
<input type=file id="cfile"   onchange="cfile_change()"   />
<p>
    <textarea id="filep" cols="68" rows="6"   ></textarea>
</p>
<button onclick="readFileContent()"  >開啟檔案</button>
<p><img id="imgx" width="300"/></p>

<input type=file id="cfile1"   onchange="cfile_change1()"   />
<p>
    <textarea id="filep1" cols="68" rows="6"   ></textarea>
</p>
<button onclick="readFileContent1()"  >開啟檔案</button>
<p><img id="imgx1" width="300"/></p>

</body>
</html>
