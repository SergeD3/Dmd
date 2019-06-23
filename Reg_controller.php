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
$but = $_POST["button"];
// echo "$fio\n $login\n $password1 \n $password2\n $diplom\n $phone\n \n$hosp \n $email \n $but";
                ///////////////////////////////////////////////////////////////
if (empty($but) && $password1==$password2){
$res = addUser($fio,$phone,$diplom,$login,$password1,$email,$hosp);
echo "<script>alert('Регистрация прошла успешно! Теперь вам необходимо войти в вашу учетную запись, для этого воспользуйтесь кнопкой Войти');</script>";
// echo "<button type="."button"."class="."btn btn-primary btn-lg btn-block".">Перейти в систему управления.</button>";
echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/index.php'>";
}else {
  echo "Что-то пошло не так...";
}
 ?>
