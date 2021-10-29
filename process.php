 <?php
 session_start();
  $sign_id = $_SESSION["user_id"]; // 세션 user_id 값을 sign_id  변수 에 넣기
  $user_name = $_SESSION['user_name'];

 require("config/config.php");
 require("lib/db.php");
 $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
 require("writeprocess.php");
 $sql = "INSERT INTO `topic` (`id`, `title`, `description` , `author` , `addr`, `addr_id`, `created`)
                        VALUES (NULL, '".$_POST['title']."', '".$_POST['description']."', '$sign_id', '".$_POST['addr']."', '{$addr_id}', now());";
 mysqli_query($conn, $sql);
 echo "$sign_id\n님 게시물 작성 성공!!";
 echo "<meta http-equiv='refresh' content='3;url=http://localhost/index.php'>";

?>
