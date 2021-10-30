<?php
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
require("config/config.php");
require("lib/db.php");
$conn = db_init($config['host'], $config['duser'], $config['dpw'], $config['dname']);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
  <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

	<script>
		function del_func(){
			alert("Del!");
		}
	</script>
</head>
<body id="target" class="black">
  <div class="container">
      <?php
      require("menubar.php");
      ?>
    <header class="jumbotron text-center">
      <img src="http://post.phinf.naver.net/20160901_256/1472708857265p6JHM_JPEG/IdNRIq4h0SXpm9CGYX5AGj8ikoZk.jpg" alt="붕어빵" class="img-circle" id="logo">
        <h1><a id="logo_name" href="http://localhost/index.php">붕어빵</a></h1>
    </header>
    <div class="row">
        <nav class="col-md-3">
          <?php //strstr() 1.인자는 전체 문장 2.인자는 찾을 단어
          if (strstr($_GET['state'], "Jindo_board")){ //아이디값에 jindo 값이 있으면 밑에 리스트 출력
						$sql = "SELECT * FROM topic where addr LIKE '전남 진도군%' order by created DESC";
						$result = mysqli_query($conn, $sql);
					?>
					<ul id="town"class="nav nav-pills nav-stacked btn-lg text-center">
          	<li id="jindo_Jindo_eup"><a href="http://localhost/?state=Jindo_board&where=Jindo_eup_board">진도읍</a></li>
            <li id="jindo_Gunnae_myeon"><a href="http://localhost/?state=Jindo_board&where=Gunnae_myeon_board">군내면</a></li>
            <li id="jindo_GoGun_myeon"><a href="http://localhost/?state=Jindo_board&where=GoGun_myeon_board">고군면</a></li>
            <li id="jindo_Uisein_myeon"><a href="http://localhost/?state=Jindo_board&where=Uisein_myeon_board">의신면</a></li>
            <li id="jindo_Limhoe_myeon"><a href="http://localhost/?state=Jindo_board&where=Limhoe_myeon_board">임회면</a></li>
            <li id="jindo_Jisan_myeon"><a href="http://localhost/?state=Jindo_board&where=Jisan_myeon_board">지산면</a></li>
            <li id="jindo_Chodo_myeon"><a href="http://localhost/?state=Jindo_board&where=Chodo_myeon_board">조도면</a></li>
           <?php
            }
						?>
					</ul>
					<?php //strstr() 1.인자는 전체 문장 2.인자는 찾을 단어
          if (strstr($_GET['state'], "Gwangju_board")){ //아이디값에 jindo 값이 있으면 밑에 리스트 출력
						$sql = "SELECT * FROM topic where addr LIKE '광주광역시%' order by created DESC";
						$result = mysqli_query($conn, $sql);
					?>
					<ul id="town"class="nav nav-pills nav-stacked btn-lg text-center">
          	<li id="jindo_Jindo_eup"><a href="http://localhost/?state=Gwangju_board&where=Gwangsangu">광산구</a></li>
            <li id="jindo_Gunnae_myeon"><a href="http://localhost/?state=Gwangju_board&where=Bokgu">북구</a></li>
            <li id="jindo_GoGun_myeon"><a href="http://localhost/?state=Gwangju_board&where=Seogu">서구</a></li>
            <li id="jindo_Uisein_myeon"><a href="http://localhost/?state=Gwangju_board&where=Donggu">동구</a></li>
            <li id="jindo_Limhoe_myeon"><a href="http://localhost/?state=Gwangju_board&where=Namgu">남구</a></li>
           <?php
            }
						?>
					</ul>
        </nav>
        <div id="mainboard" class="col-md-9">
          <article>
							<?php
							$uri= $_SERVER['REQUEST_URI'];	// 현재 uri를 구한다.
							if($uri == "/search.php"){
                // 전체 검색 sql;
                $search = $_POST['search'];
								$sql = "SELECT * FROM `topic` WHERE concat(title, description) REGEXP '$search' order by `created` DESC";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)){
									require("all_town.php");
								}
							}
							// id 파라미터가 있으면
							if($_GET['id']){
								$id = mysqli_real_escape_string($conn, $_GET['id']);
								$sql = "SELECT * FROM topic WHERE id =".$id;
								$result = mysqli_query($conn, $sql);
								$row = mysqli_fetch_assoc($result);
								echo '<h1>'.htmlspecialchars($row['title']).'</h1>';
								echo '<h2><br>'.htmlspecialchars($row['addr']).'</h2>';
								echo '<div>'.htmlspecialchars($row['created']).'</div>';
								echo '<div><br>'.htmlspecialchars($row['author']).'</div>';
				        echo '<div><br>'.htmlspecialchars($row['description']).'</div>';
								// 현재 게시자가 로그인값과 같으면 삭제버튼 생성
								if($user_id == $row['author']) echo '<br><a id="delete" href="http://localhost/del_board.php?id='.$row['id'].'" style="text-decoration-line: none;">DELETE</a><br>';
								// del_board.php 에 게시판 id 값을 보내는 코드
							}
							if (strstr($_GET['state'], "board")) // state 값에 board가 있다면 페이지 이동 버튼 생성
						{?>
						<div id="Pagination" class="text-center">
							<ul class="pagination">					<!-- pagination 클래스는 페이지 변경 bootstrap -->
						<li class="page-item"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
						<?php
						$sql = "SELECT COUNT(*) FROM `topic`"; // 게시판 개수 담는 변수
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($result)) {
							$num = 1;
							$page_num = 1;
							if ($num %  10 == 0) {
								echo '<li class="page-item"><a href="#">'.$page_num.'</a></li>';
								$page_num += 1;
							}
							$num += 1;
							}
						?>
								<li class="page-item"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
							</ul>
						</div>
						<?php } ?>
          </article>
          <hr>
          <script type="text/javascript">
          function check(box){	// 체크박스 체크하면 바디색 화이트 체크 해제하면 블랙
            if(box.checked == true) {document.getElementById('target').className='white'}
            else{document.getElementById('target').className='black'}
          }
          </script>
          <div id="control">
            <div class="btn-group" role="group" aria-label="...">
              <input id="toggle" type="checkbox" class="hide" onclick="check(this)"/>
              <label id="circle"for="toggle"><span class="hide">Label Title</span></label>
              <!--<input type="button" value="white"  class="btn btn-default  btn-lg"/> 화이트, 블랙 박스
              <input type="button" value="black"  class="btn btn-default btn-lg" onclick="document.getElementById('target').className='black'"/> -->
            </div>
						<?php
						$basename=basename($_SERVER["PHP_SELF"]);	// 현재 php파일 가져오는 함수
						if(!strstr($basename,"write.php")){?>
            <a href="http://localhost/write.php" class="btn btn-success  btn-lg">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
					<?php }
					 ?>
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
