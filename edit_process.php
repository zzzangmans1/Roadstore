<?php
session_start();
$sign_id = $_SESSION["user_id"]; // 세션 user_id 값을 sign_id  변수 에 넣기
$user_name = $_SESSION['user_name'];

require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
require("writeprocess.php");
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "UPDATE topic SET title={$_POST['title']}, description ={$_POST['description']}, addr = {$_POST['addr']} WHERE id =".$id;
mysqli_query($conn, $sql);
echo "$sign_id {$_GET['id']}\n님 게시물 수정!!";
echo "<meta http-equiv='refresh' content='3;url=http://localhost/index.php'>";

?>
