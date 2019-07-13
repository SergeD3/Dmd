<?php
include "functions_db.php";
session_start();
                ///////////////////////////////////////////////////////////////
$fio = clean($_POST['reg0']);
$login = clean($_POST['reg1']);
$password1= clean($_POST['reg2']);
$password2= clean($_POST['reg3']);
$diplom = clean($_POST['reg4']);
$phone = clean($_POST['reg5']);
$hosp = clean($_POST['reg6']);
$email= clean($_POST['reg7']);
$but = $_POST['button'];
$check = originLogin($log);
                ///////////////////////////////////////////////////////////////
if(empty($check['логин']) == 1){
if (empty($but) && $password1==$password2){
$hex = password_hash($password1, PASSWORD_BCRYPT);
$res = addUser($fio,$phone,$diplom,$login,$hex,$email,$hosp);
echo "<script>alert('Регистрация прошла успешно! Теперь вам необходимо войти в вашу учетную запись, для этого воспользуйтесь кнопкой Войти');</script>";
echo "<meta http-equiv=refresh content='0; url=index.php'>";
}else {
  echo "Что-то пошло не так...";
}
}else{
  echo "Такой логин уже существует, придумайте другой!";
}
                ///////////////////////////////////////////////////////////////
 ?>
