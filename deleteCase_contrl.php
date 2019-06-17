<?php
include "functions_db.php";
      /////////////////////////////////////////
$id = clean($_POST['delCase']);
$id_c = clean($_GET['id']);
      /////////////////////////////////////////
if (empty($id)) {
  $res = deleteCase($id_c);
}elseif (empty($id_c)) {
  $res = deleteCase($id);
}
      /////////////////////////////////////////
if ($res == 1) {
  echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/lobby.php'>";
   $alert = "Кейс успешно удалён";
   include "alert.php";
}else {
  $alert = "Что-то пошло не так...";
  include "alert.php";
}
?>
