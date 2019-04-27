<?php
include "functions_db.php";
if(!empty ($_POST["button"])){
  $email=htmlspecialchars($_POST["mail"]);
  $password1=htmlspecialchars($_POST["passw"]);
  $password2=htmlspecialchars($_POST["passw1"]);
  if(strlen($email)<3) $success=false;
  elseif($password1!=$password2) $success=false;
  else $success=addUser($email, md5($password2));
  if(!$success) $alert="Ошибка регистрации";
  else $alert="Вы успешно зарегистрировались";
  include "alert.php";

$res = addUser($_POST["fio"],$_POST["phone"],$_POST["diplom"],$_POST["username"],$_POST["passw"],$_POST["mail"],$_POST["Sel_hosp"]);
Header("Location:/lobby.php");


 ?>
