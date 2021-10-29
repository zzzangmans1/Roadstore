<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Signin</title>
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
  <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target" class="black">
  <!-- form에 글자 비었는지 체크하는 js 함수-->
  <SCRIPT language="javaScript">
    function check_onclick(){
      theForm=document.login;
      if(theForm.sign_id.value == "") {
        alert("아이디를 입력해주세요.");
        return theForm.sign_id.focus();
      }
      if(theForm.sign_pw.value == "") {
        alert("패스워드를 입력해주세요.");
        return theForm.sign_pw.focus();
      }
      if(theForm.sign_id.value != "" && theForm.sign_pw.value != "") {
        theForm.action="sign_check.php";
        theForm.submit(); //비어있지 않으면 폼 넘긴다.
      }
    }
  </SCRIPT>
  <div class="container">
    <?php
    require("menubar.php");
    ?>
    <header class="jumbotron text-center">
      <img src="http://post.phinf.naver.net/20160901_256/1472708857265p6JHM_JPEG/IdNRIq4h0SXpm9CGYX5AGj8ikoZk.jpg" alt="붕어빵" class="img-circle" id="logo">
        <h1><a style="text-decoration-line: none;" href="http://localhost/index.php">붕어빵</a></h1>
    </header>
    <div class="row">

        <nav class="col-md-3">
          <ol class="nav nav-pills nav-stacked">

          </ol>
        </nav>
        <div class="col-md-9">
          <article>
            <form  method="post" name="login">
              <div class="form-group">ID<br>
                <input type="text" class="form-control.span1" name="sign_id" id="sign_id" placeholder="아이디를 입력해주세요.">
              </div>
              <br>
              <div class="form-group">Password<br>
                <input type="password" class="form-control.span1" name="sign_pw" id="sign_pw" placeholder="비밀번호를 입력해주세요.">
              </div>
              <input type="button" class="btn btn-default btn-lg" onclick="check_onclick()" value="Login">
            </form>
          </article>
          <hr>
          <script type="text/javascript"> // 체크박스 체크하면 바디색 화이트 체크 해제하면 블랙
          function check(box){
            if(box.checked == true) {document.getElementById('target').className='white'}
            else{document.getElementById('target').className='black'}
          }
          </script>
          <div id="control">
            <div class="btn-group" role="group" aria-label="...">
              <input id="toggle" type="checkbox" class="hide" onclick="check(this)"/>
              <label for="toggle"><span class="hide">Label Title</span></label>
              <!--<input type="button" value="white"  class="btn btn-default  btn-lg"/> 화이트, 블랙 박스
              <input type="button" value="black"  class="btn btn-default btn-lg" onclick="document.getElementById('target').className='black'"/> -->
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
