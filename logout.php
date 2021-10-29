<?php
session_start();  // 세션 초기화
session_destroy();  // 세션 삭제
echo "로그아웃 되셨습니다. <br>5초뒤에 홈페이지로 갑니다.";
echo "<meta http-equiv='refresh' content='5;url=http://localhost/index.php'>"; // content 시간 정하기, url = 돌아갈 url 정하기
 ?>
