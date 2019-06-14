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
function editMainDaig($id,$klin1,$klin2,$klin3,$klin4,$klin5,$pat1,$pat2,$pat3,$pat4,$pat5,$entity,$etio,$loc,$eror){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `Кейс` Set Основное_поступлениеК = \"$klin1\",Основное_поступК2 =\"$klin2\",Основное_поступК3 = \"$klin3\",Основное_поступК4 = \"$klin4\",Основное_поступК5 = \"$klin5\",Основное_поступлениеП = \"$pat1\",Основное_поступП2 = \"$pat2\",Основное_поступП3 = \"$pat3\",Основное_поступП4 = \"$pat4\",Основное_поступП5 = \"$pat5\",Сущность_1 = $entity, Этиология_1 = $etio, Локализация_1 = $loc, ОщибТракт_1 = $eror WHERE id_кейса = $id");
  closeDB();
  return $res;
}
function editComplication($id,$klin1,$klin2,$klin3,$klin4,$klin5,$pat1,$pat2,$pat3,$pat4,$pat5,$entity,$etio,$loc,$eror){
global $link;
openDB();
$res = mysqli_query($link,"UPDATE `Кейс` Set Осложнения_К = \"$klin1\",Ослож_2_кд =\"$klin2\",Ослож_3_кд = \"$klin3\",Ослож_4_кд = \"$klin4\",Ослож_5_кд = \"$klin5\",Осложнения_П = \"$pat1\",Ослож_2_пд = \"$pat2\",Ослож_3_пд = \"$pat3\",Ослож_4_пд = \"$pat4\",Ослож_5_пд = \"$pat5\",Сущность_2 = $entity, Этиология_2 = $etio, Локализация_2 = $loc, ОщибТракт_2 = $eror WHERE id_кейса = $id");
closeDB();
return $res;
}
 ?>
