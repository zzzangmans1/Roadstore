
    <?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "ruemfkddl1");
    mysqli_select_db($conn, "loadstore");

    $sign_id = $_POST['sign_id'];
    $sign_pw = $_POST['sign_pw'];

    $id_sql = "SELECT * FROM `user` WHERE `user_id` = '$sign_id'";
    $result = mysqli_query($conn, $id_sql);
    if ($result->num_rows > 0 ) {
      //echo "ID 값은 있다<br>";
      $row = mysqli_fetch_assoc($result); //mysqli_fetch_assoc 로 칼럼 값으로 배열을 가져온다.
      if ($row['user_pw'] == $sign_pw) {
        $_SESSION["user_id"] = $sign_id;
        $_SESSION["user_name"] = $row['name'];
        if (isset($_SESSION['user_id'])) {
          echo "로그인 성공!!<br>";
          echo "반갑습니다. $sign_id\n님";
          echo "<meta http-equiv='refresh' content='3;url=http://localhost/index.php'>"; // content 시간 정하기, url = 돌아갈 url 정하기
       }
        else {
          echo "세션 저장 실패<br>";
        }
      }
      else {
        echo "패스워드가 틀렸습니다.<br>";
        echo "<meta http-equiv='refresh' content='3;url=http://localhost/signin.php'>";
      }
    }
    else {
      echo "아이디가 없습니다.<br>";
      echo "<meta http-equiv='refresh' content='3;url=http://localhost/signin.php'>";
    }

  ?>
