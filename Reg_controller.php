<?php
include "functions_db.php";
$hosp = $_POST['Sel_hosp'];
$email=htmlspecialchars($_POST["mail"]);
$password1=htmlspecialchars($_POST["passw"]);
$password2=htmlspecialchars($_POST["passw1"]);
$but = $_POST["button"];
if (empty($but) && $password1==$password2){
$res = addUser($_POST["fio"],$_POST["phone"],$_POST["diplom"],$_POST["username"],$password1,$email,$hosp);
echo "<script>alert('Регистрация прошла успешно!');</script>";
echo "<button type="."button"."class="."btn btn-primary btn-lg btn-block".">Перейти в систему управления.</button>";
$id = $res['id_employ'];
echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/lobby.php?id=$id'>";
}
else {
  echo "<script>alert('Не сработало...');</script>";
}
 ?>
