<?php
include "functions_db.php";
      /////////////////////////////////////////////////////////////////////////
$sex = clean($_POST['sexsel']);
$age = clean($_POST['ageIn']);
$kd = clean($_POST['days']);
$kh = clean($_POST['hour']);
$dDat = clean($_POST['Date_death']);
$dAut = clean($_POST['Date_autopsy']);
$protokol = clean($_POST['Date_end']);
$svid = clean($_POST['pos']);
$autopsy1 = clean($_POST['ob_autopsy']);
$posComm = clean($_POST['pos_comm']);
$autComm = clean($_POST['aut_comm']);
      /////////////////////////////////////////////////////////////////////////
$res1 = addCase($sex,$age,$kd,$kh,$dDat,$dAut,$protokol,$svid,$autopsy1,$posComm,$autComm);
echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/certain_key_view.php?certainKey1=$res1'>";
 ?>
