<?php
include "functions_db.php";
      /////////////////////////////////////////
$id = clean($_POST['delCase']);
$id1 = clean($_GET['id']);
      /////////////////////////////////////////
if (empty($id) == true && empty($id1) == true) {
  echo "<script>alert('Введите номер кейса, пожалуйста!');</script>";
  echo "<meta http-equiv=refresh content='0; url=lobby.php'>";
}elseif (empty($id) == false && empty($id1) == true) {
  $res = deleteCase($id);
}elseif (empty($id1) == false && empty($id) == true) {
  $res = deleteCase($id1);
}
      /////////////////////////////////////////
if ($res == 1 && empty($id) == false && empty($id1) == true) {
  $delP = delPat($id);
  $delK = delKlin($id);
  if ($delP == 1 && $delK == 1) {
    echo "<script>alert('Кейс успешно удален из всех таблиц! Браво!');</script>";
    echo "<meta http-equiv=refresh content='0; url=lobby.php'>";
  }else {
    echo "<script>alert('Вознникла проблема с удалением кейса из клинической или патологоанатомической таблицы!');</script>";
  }
}elseif ($res == 1 && empty($id1) == false && empty($id) == true) {
  $delP = delPat($id1);
  $delK = delKlin($id1);
  if ($delP == 1 && $delK == 1) {
    echo "<script>alert('Кейс успешно удален из всех таблиц! Браво!');</script>";
    echo "<meta http-equiv=refresh content='0; url=lobby.php'>";
  }else {
    echo "<script>alert('Вознникла проблема с удалением кейса из клинической или патологоанатомической таблицы!');</script>";
  }
}
      /////////////////////////////////////////
?>
