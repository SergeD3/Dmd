<?php
$link = false;
// общие функции начало
function openDB(){
  global $link;
  $host = "localhost";
  $user = "root";
  $password = "";
  $db_name = "больница";
  $link = mysqli_connect($host, $user, $password, $db_name)
  or die("Нэ працюе:" . mysqli_error($link));
  mysqli_query($link,"SET NAMES UTF8");
}
function closeDB(){
  global $link;
  mysqli_close($link);
}
// общие функции конец

// получаем все больницы для регистрации.
function getAllHosp(){
  global $link;
  openDB();
  $query = "SELECT id_hosp,название FROM hosp";
  $res1 = mysqli_query($link,$query);
// or die('Query failed: '. mysqli_error());
  closeDB();
  return $res1->fetch_all($resultype=MYSQLI_ASSOC);
}
// Регистрация
function addUser ($fio,$phone,$diplom,$username,$pasword,$mail,$hosp){
  global $link;
  openDB();
  $query = "INSERT INTO employees(ФИО,номер_тел,номер_диплома,логин,пароль,маил,больница) VALUES('$fio','$phone','$diplom','$username','$pasword','$mail','$hosp')";
  $res = mysqli_query($link,$query);
  closeDB();
  return $res;
}
// Выбираем мкб из БД
function chooseMKB (){
  global $link;
  openDB();
  $query = "SELECT id_МКБ,Диагноз FROM мкб";
  $res = mysqli_query($link,$query);
  closeDB();
  return $res->fetch_all($resultype=MYSQLI_ASSOC);
}
// Выводим данные из БД в форму Кейс
function GetKeys(){
  global $link;
  openDB();
  $query = "SELECT * FROM keys";
  $res = mysqli_query($link,$query);
  closeDB();
  return $res->fetch_all($resultype=MYSQLI_ASSOC);
}
// Выбираем определённый Кейс
function certainKey($numb_k){
  global $link;
  openDB();
  $query = "SELECT * FROM Кейс WHERE id_кейса = $numb_k";
  $res = mysqli_query($link,$query);
  closeDB();
  return mysqli_fetch_assoc($res);
  // $answ = mysqli_fetch_assoc($res);
  // return $answ["id_кейса"];
}
// берём клин диагнозы по определённому кейсу
function klinDiagnoz($id){
  global $link;
  openDB();
  $query = "SELECT `клиническийдиагноз`.`id_МКБ`,`мкб`.`Диагноз`
  FROM `клиническийдиагноз` join `мкб` on `клиническийдиагноз`.`id_МКБ` = `мкб`.`id_МКБ`
  WHERE `клиническийдиагноз`.`id_кейса` = $id";
  $res = mysqli_query($link,$query);
  closeDB();
  // return mysqli_fetch_assoc($res);
  return $res->fetch_all($resultype=MYSQLI_ASSOC);
}
// берём патолог диагнозы по определённому кейсу
function patologDiagnoz($id){
  global $link;
  openDB();
  $query = "SELECT `патоалогическийдиагноз`.`id_МКБ`,`мкб`.`Диагноз`
  FROM `патоалогическийдиагноз` join `мкб` on `патоалогическийдиагноз`.`id_МКБ` = `мкб`.`id_МКБ`
  WHERE `патоалогическийдиагноз`.`id_кейса` = $id";
  $res = mysqli_query($link,$query);
  closeDB();
  // return mysqli_fetch_assoc($res);
  return $res->fetch_all($resultype=MYSQLI_ASSOC);
}
// Редирект
function redirect($url){
  header('Location:' . $url);
  exit;
}
 ?>
