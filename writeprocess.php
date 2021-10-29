<?php
if (strstr($_POST['addr'], "진도군")) {
  if (strstr($_POST['addr'], "진도읍")) {
   $addr_id = "061_02_01";
  }
  elseif (strstr($_POST['addr'], "군내면")) {
    $addr_id = "061_02_02";
  }
  elseif (strstr($_POST['addr'], "고군면")) {
    $addr_id = "061_02_03";
  }
  elseif (strstr($_POST['addr'], "의신면")) {
    $addr_id = "061_02_04";
  }
  elseif (strstr($_POST['addr'], "임회면")) {
    $addr_id = "061_02_05";
  }
  elseif (strstr($_POST['addr'], "지산면")) {
    $addr_id = "061_02_06";
  }
  elseif (strstr($_POST['addr'], "조도면")) {
    $addr_id = "061_02_07";
  }
}
if (strstr($_POST['addr'], "광주광역시")) {
  if (strstr($_POST['addr'], "광산구")) {
   $addr_id = "062_01";
  }
  elseif (strstr($_POST['addr'], "북구")) {
    $addr_id = "062_02";
  }
  elseif (strstr($_POST['addr'], "서구")) {
    $addr_id = "062_03";
  }
  elseif (strstr($_POST['addr'], "동구")) {
    $addr_id = "062_04";
  }
  elseif (strstr($_POST['addr'], "남구")) {
    $addr_id = "062_05";
  }
}

 ?>
