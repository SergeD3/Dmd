<?php
include "functions_db.php";
$kd = 0;
$kh = '00:00';
$kd =clean( $_POST['days']);
$kh = clean($_POST['hour']);
$ids = clean($_GET['ids']);
$sex = clean($_POST['sexsel']);
$age = clean($_POST['ageIn']);
$dd = clean($_POST['Date_death']);
$da = clean($_POST['Date_autopsy']);
$dadd = clean($_POST['Date_add']);
$dp = clean($_POST['Date_end']);
$pos = clean($_POST['pos']);
$oa = clean($_POST['ob_autopsy']);
$pc = clean($_POST['pos_comm']);
$ca = clean($_POST['aut_comm']);
// if ($kd == NULL) {
$result = editCase($ids,$age,$sex,$kd,$kh,$dd,$da,$dadd,$dp,$pos,$oa,$pc,$ca);
echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/certain_key_view.php?certainKey1=$ids'>";
  // $result = editCase($sex,$age,$kd,$kh,$dd,$da,$dadd,$dp,$pos,$oa,$pc,$ca,$id);
// }
// elseif ($kh == NULL) {
  // $result = editCase($sex,$age,$kd,$kh,$dd,$da,$dadd,$dp,$pos,$oa,$pc,$ca,$id);
// }
// echo "$sex.</br>";
// echo "$age</br>";
// echo "$kd</br>";
// echo "$kh</br>";
// echo "$dd</br>";
// echo "$da</br>";
// echo "$dadd</br>";
// echo "$dp</br>";
// echo "$pos</br>1";
// echo "$oa</br>";
// echo "$ids</br>";
// echo "$age</br>";
 ?>
