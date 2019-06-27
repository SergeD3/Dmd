<?php
include "functions_db.php";
session_start();
      /////////////////////////////////////////
$log = clean($_POST['login']);
$pass = clean($_POST['password']);
      /////////////////////////////////////////
if (empty($log) || empty($pass)) {
     exit("Вы не заполнили поля! Вернитесь назад и попробуйте ещё раз.");
   }else {
     $return = checkUser($log);
     if (empty($return['логин']) == 1) {
       echo "<script>alert('Такой логин не существует, вернитесь назад и попробуйте ещё раз.');</script>";
       echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/index.php'>";
     }elseif (password_verify($pass,$return['пароль']) == 1) {
       $_SESSION['login']=$return['логин'];
       echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/lobby.php'>";
     }else {
       exit ("Извините, введённый вами login или пароль неверный.");
  }
}
      /////////////////////////////////////////
?>
