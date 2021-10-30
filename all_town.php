<!DOCTYPE html>
<!-- 모든 게시글 출력 php-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul id="board">
      <?php
      $uri= $_SERVER['REQUEST_URI'];	// 현재 uri를 구한다.
      if($uri == "/index.php"){
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?id='.$row['id'].'"><br>'.htmlspecialchars($row['title']).'</a><br></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
      else if($uri == "/search.php"){
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/search.php?id='.$row['id'].'"><br>'.htmlspecialchars($row['title']).'</a><br></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
      ?>
    </ul>
  </body>
</html>
