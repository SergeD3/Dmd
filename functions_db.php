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
  or die("Не работает:" . mysqli_error($link));
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
  $query = "SELECT * FROM Кейс";
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
// разница по времени между вскрытием и протоколом
// function getDay($id){
//   global $link;
//   openDB();
//   $query = "SELECT `кейс`.`id_кейса` AS `id_кейса`,(timestampdiff(DAY,`кейс`.`Дата_вскрытия`,`кейс`.`ДатаПротокола`)+ 1)
//   from `кейс` where `кейс`.`id_кейса` = $id";
//   $res = mysqli_query($link,$query);
//   closeDB();
//   return $res->fetch_assoc();
// }
// function getTime($id){
//   global $link;
//   openDB();
//   $query = "SELECT `кейс`.`id_кейса` AS `id_кейса`",concat(hour(sec_to_time(timestampdiff(SECOND,`кейс`.`Дата_смерти`,`кейс`.`Дата_вскрытия`))),':',minute(sec_to_time(timestampdiff(SECOND,`кейс`.`Дата_смерти`,`кейс`.`Дата_вскрытия`)))) AS `Name_exp_2` from `кейс` $id";
//   $res = mysqli_query($link,$query);
//   closeDB();
//   return $res->fetch_all($resultype=MYSQLI_ASSOC);
// }
function editCase($id,$age,$sex,$kd,$kh,$dd,$da,$dadd,$dp,$pos,$oa,$pc,$ca){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `Кейс` SET Возраст ='$age', Пол = '$sex', койко_дни = '$kd', Койко_часы = '$kh', Дата_смерти = '$dd', Дата_вскрытия = '$da', Дата_добавления_записи = '$dadd', ДатаПротокола = '$dp', СовпадениеПрот = '$pos', ОбязАутоп = '$oa', ПОС_комм = '$pc', Коментарий = '$ca' WHERE id_кейса = '$id'");
  closeDB();
  return $res;
}
function editDaig($id,$klinId,$patId){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `клиническийдиагноз`,`патоалогическийдиагноз`
  SET `клиническийдиагноз`.id_кейса = $id, `клиническийдиагноз`.id_МКБ = $klinId,`патоалогическийдиагноз`.id_кейса = $id,`патоалогическийдиагноз`.id_МКБ = $patId
  WHERE `клиническийдиагноз`.id_кейса = '$id' AND `патоалогическийдиагноз`.id_кейса = $id ");
  closeDB();
  return $res;
}
function editMainDaig($id,$klin1,$klin2,$klin3,$klin4,$klin5,$pat1,$pat2,$pat3,$pat4,$pat5,$entity,$etiolg,$location,$error){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `Кейс` Set Основное_поступление(К) =$klin1,Основное_поступК2 =$klin2,Основное_поступК3 = $klin3,Основное_поступК4 = $klin4,Основное_поступК5 = $klin5,Основное_поступление(П) = $pat1,Основное_поступП2 = $pat2,Основное_поступП3 = $pat3,Основное_поступП4 = $pat4,Основное_поступП5 = $pat5,Сущность_1 = $entity, Этиология_1 = $etiolg, Локализация_1 = $location, ОщибТракт_1 = $error WHERE id_кейса = $id");
  closeDB();
  return $res;
}
 ?>
