<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]) or die("db conect failed!");
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <!--<input type="button" onclick="onclick_remove()" value="삭제">
  <input type="button" onclick="onclick_cancle()" value="취소">
  <script language="javaScript">
    // 취소하면 index.php로 이동하는 함수
    function onclick_cancle(){
      alert("취소하셨습니다. index.php로 이동하겠습니다");
      location.href="http://localhost/index.php";       // location.href 이동하는 명령어
    }
    // 게시글 삭제 함수
    function onclick_remove(){
      a = 1;
      <?php
      if('<script>a == 1</script>'){
        $sql = "DELETE FROM `topic` WHERE `id`='$id'";
        $result = mysqli_query($conn, $sql) or die("db query failed!");
        mysqli_close($conn);
      }
      ?>
      //alert("<?=$id?>");-->
      <script>
      alert("게시글이 삭제되었습니다.");
      history.replaceState({}, null, location.pathname); // 파라미터 삭제 코드
      location.href="http://localhost/index.php";// index.php 로 이동
      //history.back(); // 뒤로가기
      </script>
<!--
    }

  </script>
-->
</body>
</html>
