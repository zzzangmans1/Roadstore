<?php

$conn = mysqli_connect("localhost", "root", "ruemfkddl1");
mysqli_select_db($conn, "loadstore");
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$user_em = $_POST['email'];
$user_nm = $_POST['Nickname'];
if ($user_id == NULL || $user_pw == NULL || $user_em == NULL || $user_nm == NULL)
{
  echo "빈칸을 모두 채워주세요.";
  echo "<meta http-equiv='refresh' content='3; url=http://localhost/join.php'>";
}
$sql = "SELECT * FROM `user` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($row['user_id'] == $user_id) {
  echo "ID가 존재합니다 다시 작성해주세요";
}
else {
  $sql = "INSERT INTO `user` (`id`, `user_id`, `user_pw`, `addr`, `name`)
                      VALUES (NULL,'".$_POST['user_id']."','".$_POST['user_pw']."','".$_POST['email']."', '".$_POST['Nickname']."');";
echo "Join 성공!$user_id";
}
mysqli_query($conn, $sql);

header("Location: index.php");
 ?>
