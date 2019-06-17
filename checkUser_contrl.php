<?php
include "functions_db.php";
session_start();
      /////////////////////////////////////////
$log = clean($_POST['login']);
$pass = clean($_POST['password']);
if (empty($log) || empty($pass)) {
  exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}else {
  $return = checkUser($log);
  if (empty($return['логин'])) {
    echo $return['логин'];
    exit ("Такой логин не существует, вернитесь назад и попробуйте ещё раз.");
  }elseif ($return['пароль'] == $pass) {
    $_SESSION['login']=$return['логин'];
    // $_SESSION['id']=$myrow['id_employ'];
    echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/lobby.php'>";
  }else {
    exit ("Извините, введённый вами login или пароль неверный.");
  }
}
      /////////////////////////////////////////
?>
