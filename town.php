<!DOCTYPE html>
<!-- 게시판 db에서 찾아서 출력해주는 php-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul id="board">
      <?php
      // 진도
      if ($_GET['state'] == "Jindo_board" && strstr($row['addr_id'], "061_02") && empty($_GET['where'])) {
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id='.$row['id'].'"><br>'.htmlspecialchars($row['title']).'</a><br></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
      else if (strstr($_GET['where'], "Jindo_eup") && $row['addr_id'] == "061_02_01")  // 061_02_01 iddr_id값이 진도읍
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Gunnae_myeon") && $row['addr_id'] == "061_02_02")  // 061_02_02 iddr_id값이 군내면
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "GoGun_myeon") && $row['addr_id'] == "061_02_03")  // 061_02_03 iddr_id값이 고군면
    { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Uisein_myeon") && $row['addr_id'] == "061_02_04")  // 061_02_04 iddr_id값이 의신면
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Limhoe_myeon") && $row['addr_id'] == "061_02_05")  // 061_02_05 iddr_id값이 임회면
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Jisan_myeon") && $row['addr_id'] == "061_02_06")  // 061_02_06 iddr_id값이 지산면
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Chodo_myeon") && $row['addr_id'] == "061_02_07")  // 061_02_06 iddr_id값이 조도면
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Jindo_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }

      // 광주광역시
      if ($_GET['state'] == "Gwangju_board" && strstr($row['addr_id'], "062") && empty($_GET['where'])) {
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Gwangju_board&id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
      else if (strstr($_GET['where'], "Gwangsangu") && $row['addr_id'] == "062_01")  // 062_01 광산
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Gwangju_board&id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Bokgu") && $row['addr_id'] == "062_02")  // 062_02 북구
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Gwangju_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Seogu") && $row['addr_id'] == "062_03")  // 062_03 서구
    { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Gwangju_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Donggu") && $row['addr_id'] == "062_04")  // 062_04 동구
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Gwangju_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
    else if (strstr($_GET['where'], "Namgu") && $row['addr_id'] == "062_05")  // 062_05 남구
      { // 파라미터값 에 Jindo_eup 이 있구 addr_id 값이 061_544 가 맞으면 출력
        echo '<li class="text-left"><a id="bd_name"  href="http://localhost/index.php?state=Gwangju_board&id=">'.htmlspecialchars($row['title']).'</a></li>'.
        '<p class="text-right">'.htmlspecialchars($row['author'])."&nbsp;"."&nbsp;".htmlspecialchars($row['created']).'</p>'; // "&nbsp;" html 공백넣기.
      }
      ?>
    </ul>
  </body>
</html>
