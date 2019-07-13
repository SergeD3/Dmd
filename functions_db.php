<?php
$link = false;
// общие функции начало
function openDB(){
  global $link;
  $host = "127.0.0.1";
  $user = "root";
  $password = "";
  $db_name = "id9889184_hospital";
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
function addUser($fio,$phone,$diplom,$login,$pasword,$mail,$hosp){
  global $link;
  openDB();
  $sql = "INSERT INTO `employees`(ФИО,номер_тел,номер_диплома,логин,пароль,маил,id_hosp) VALUES(\"$fio\",$phone,\"$diplom\",\"$login\",\"$pasword\",\"$mail\",$hosp)";
  $res = mysqli_query($link,$sql);
  closeDB();
  return $res;
}
// Выбираем мкб из БД
function chooseMKB (){
  global $link;
  openDB();
  $query = "SELECT id_МКБ,Диагноз FROM mkb";
  $res = mysqli_query($link,$query);
  closeDB();
  return $res->fetch_all($resultype=MYSQLI_ASSOC);
}
// Выводим данные из БД в форму Кейс
function GetKeys(){
  global $link;
  openDB();
  $query = "SELECT * FROM `Kases`";
  $res = mysqli_query($link,$query);
  closeDB();
  return $res->fetch_all($resultype=MYSQLI_ASSOC);
}
// Выбираем определённый Кейс
function certainKey($numb_k){
  global $link;
  openDB();
  $query = "SELECT * FROM `Kases` WHERE id_кейса = $numb_k";
  $res = mysqli_query($link,$query);
  closeDB();
  return mysqli_fetch_assoc($res);
}
// берём клин диагнозы по определённому кейсу
function klinDiagnoz($id){
  global $link;
  openDB();
  $query = "SELECT `Klindiagnoz`.`id_МКБ`,`mkb`.`Диагноз`
  FROM `Klindiagnoz` join `mkb` on `Klindiagnoz`.`id_МКБ` = `mkb`.`id_МКБ`
  WHERE `Klindiagnoz`.`id_кейса` = $id";
  $res = mysqli_query($link,$query);
  closeDB();
  // return mysqli_fetch_assoc($res);
  return $res->fetch_all($resultype=MYSQLI_ASSOC);
}
// берём патолог диагнозы по определённому кейсу
function patologDiagnoz($id){
  global $link;
  openDB();
  $query = "SELECT `patologdiagnoz`.`id_МКБ`,`mkb`.`Диагноз`
  FROM `patologdiagnoz` join `mkb` on `patologdiagnoz`.`id_МКБ` = `mkb`.`id_МКБ`
  WHERE `patologdiagnoz`.`id_кейса` = $id";
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
  $res = mysqli_query($link,"UPDATE `Kases` SET Возраст ='$age', Пол = '$sex', койко_дни = '$kd', Койко_часы = '$kh', Дата_смерти = '$dd', Дата_вскрытия = '$da', Дата_добавления_записи = '$dadd', ДатаПротокола = '$dp', СовпадениеПрот = '$pos', ОбязАутоп = '$oa', ПОС_комм = '$pc', Коментарий = '$ca' WHERE id_кейса = '$id'");
  closeDB();
  return $res;
}
function editDaig($id,$klinId,$patId){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `Klindiagnoz`,`patologdiagnoz`
  SET `Klindiagnoz`.id_кейса = $id, `Klindiagnoz`.id_МКБ = $klinId,`patologdiagnoz`.id_кейса = $id,`patologdiagnoz`.id_МКБ = $patId
  WHERE `Klindiagnoz`.id_кейса = '$id' AND `patologdiagnoz`.id_кейса = $id ");
  closeDB();
return $res;
}
function editMainDaig($id,$klin1,$klin2,$klin3,$klin4,$klin5,$pat1,$pat2,$pat3,$pat4,$pat5,$entity,$etio,$loc,$eror){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `Kases` Set Основное_поступлениеК = \"$klin1\",Основное_поступК2 =\"$klin2\",Основное_поступК3 = \"$klin3\",Основное_поступК4 = \"$klin4\",Основное_поступК5 = \"$klin5\",Основное_поступлениеП = \"$pat1\",Основное_поступП2 = \"$pat2\",Основное_поступП3 = \"$pat3\",Основное_поступП4 = \"$pat4\",Основное_поступП5 = \"$pat5\",Сущность_1 = $entity, Этиология_1 = $etio, Локализация_1 = $loc, ОщибТракт_1 = $eror WHERE id_кейса = $id");
  closeDB();
return $res;
}
function editComplication($id,$klin1,$klin2,$klin3,$klin4,$klin5,$pat1,$pat2,$pat3,$pat4,$pat5,$entity,$etio,$loc,$eror){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `Kases` Set Осложнения_К = \"$klin1\",Ослож_2_кд =\"$klin2\",Ослож_3_кд = \"$klin3\",Ослож_4_кд = \"$klin4\",Ослож_5_кд = \"$klin5\",Осложнения_П = \"$pat1\",Ослож_2_пд = \"$pat2\",Ослож_3_пд = \"$pat3\",Ослож_4_пд = \"$pat4\",Ослож_5_пд = \"$pat5\",Сущность_2 = $entity, Этиология_2 = $etio, Локализация_2 = $loc, ОщибТракт_2 = $eror WHERE id_кейса = $id");
  closeDB();
return $res;
}
function editAccomp($id,$sopK1,$sopK2,$sopK3,$sopK4,$sopK5,$sopP1,$sopP2,$sopP3,$sopP4,$sopP5,$ent,$etio,$loc,$error){
  global $link;
  openDB();
  $res = mysqli_query($link,"UPDATE `Kases` Set Сопутствующие_диагнозыК = \"$sopK1\", Сопут_2_кд = \"$sopK2\", Сопут_3_кд = \"$sopK3\", Сопут_4_кд = \"$sopK4\", Сопут_5_кд = \"$sopK5\", Сопутствующие_диагнозыП = \"$sopP1\", Сопут_2_пд = \"$sopP2\", Сопут_3_пд = \"$sopP3\", Сопут_4_пд = \"$sopP4\", Сопут_5_пд = \"$sopP5\", Сущность_3 = $ent, Этиология_3 = $etio, Локализация_3 = $loc, ОщибТракт_3 = $error WHERE id_кейса = $id");
  closeDB();
return $res;
}
function addCase($sex,$age,$kd,$kh,$dDat,$dAut,$protokol,$svid,$autopsy,$posComm,$autComm){
  global $link;
  openDB();
  $res = mysqli_query($link,"INSERT INTO `Kases`(Пол,Возраст,койко_дни,Койко_часы,Дата_смерти,Дата_вскрытия,ДатаПротокола,СовпадениеПрот,ОбязАутоп,ПОС_комм,Коментарий) VALUES(\"$sex\",$age,$kd,'$kh','$dDat','$dAut','$protokol',\"$svid\",\"$autopsy\",\"$posComm\",\"$autComm\")");
  $res1 = mysqli_insert_id($link);
  closeDB();
return $res1;
}
 // Валидация данных
function clean($value = "") {
  $value = trim($value);
  $value = stripslashes($value);
  $value = strip_tags($value);
  $value = htmlspecialchars($value);
return $value;
}
// function deleteCase($id){
// global $link;
// openDB();
// $sql = "DELETE `Kases`,`Klindiagnoz`,`patologdiagnoz` FROM `Kases` INNER JOIN `Klindiagnoz` INNER JOIN `patologdiagnoz`\n"
//   . "WHERE `Kases`.`id_кейса` =`Klindiagnoz`.`id_кейса` AND `Klindiagnoz`.`id_кейса` =`patologdiagnoz`.`id_кейса` AND `Kases`.`id_кейса` = '$id'";
//   $res = mysqli_query($link,$sql);
// closeDB();
// return $res;
// }
// вызов хранимой процедуры сравнения
function compareProcedure($id){
  global $link;
  openDB();
  $res = mysqli_query($link, "CALL `Sravnenie`('$id')");
  closedb();
return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// проверка входа
function checkUser($log){
  global $link;
  openDB();
  $res = mysqli_query($link,"SELECT * FROM `employees` WHERE логин = \"$log\"");
  closeDB();
return mysqli_fetch_assoc($res);
}
// проверка логина на уникальность
function originLogin($log){
  global $link;
  openDB();
  $res = mysqli_query($link,"SELECT * FROM `employees` WHERE логин = \"$log\"");
  closeDB();
return mysqli_fetch_assoc($res);
}
function deleteCase($id){
  global $link;
  openDB();
  $res = mysqli_query($link, "DELETE FROM Kases WHERE id_кейса = $id");
  closeDB();
  return $res;
}
function delPat($id){
  global $link;
  openDB();
  $res = mysqli_query($link, "DELETE FROM patologdiagnoz WHERE id_кейса = $id");
  closeDB();
  return $res;
}
function delKlin($id){
  global $link;
  openDB();
  $res = mysqli_query($link, "DELETE FROM Klindiagnoz WHERE id_кейса = $id");
  closeDB();
  return $res;
}
 ?>
