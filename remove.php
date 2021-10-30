<?php
session_start();  // 세션 초기화
 $sign_id = $_SESSION["user_id"]; // 세션 user_id 값을 sign_id  변수 에 넣기
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]) or die("db conect failed!");
session_destroy();  // 세션 삭제
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <script language="javaScript">
    // 취소하면 index.php로 이동하는 함수
    function onclick_cancle(){
      alert("취소하셨습니다. index.php로 이동하겠습니다");
      location.href="http://localhost/index.php";       // location.href 이동하는 명령어
    }
    // 회원 탈퇴하는 함수
    function onclick_remove(){
      <?php
      $sql = "DELETE FROM `user` WHERE `user_id`='$sign_id'";
      $result = mysqli_query($conn, $sql) or die("db query failed!");
      $sql = "DELETE FROM `topic` WHERE `author`='$sign_id'";
      $result = mysqli_query($conn, $sql) or die("db query failed!");
      mysqli_close($conn);
      ?>
      alert("회원탈퇴를 하셨습니다.");
      location.href="http://localhost/index.php";
    }
  </script>
  <input type="button" onclick="onclick_remove()" value="탈퇴">
  <input type="button" onclick="onclick_cancle()" value="취소">
</body>
</html>
