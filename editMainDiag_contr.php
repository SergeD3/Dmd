<?php
include "functions_db.php";
      /////////////////////////////////////////
$id = $_POST['id_c'];
$klin1 = clean($_POST['klin1']);
$klin2 = clean($_POST['klin2']);
$klin3 = clean($_POST['klin3']);
$klin4 = clean($_POST['klin4']);
$klin5 = clean($_POST['klin5']);
$pat1 = clean($_POST['pat1']);
$pat2 = clean($_POST['pat2']);
$pat3 = clean($_POST['pat3']);
$pat4 = clean($_POST['pat4']);
$pat5 = clean($_POST['pat5']);
      /////////////////////////////////////////
      if (empty($_POST['entity'])) {
        $entity = 0;
      }else {
        $entity = $_POST['entity'];
      }
      /////////////////////////////////////////
      if (empty($_POST['etiolog'])) {
        $etio = 0;
      }else {
        $etio = $_POST['etiolog'];
      }
      /////////////////////////////////////////
      if (empty($_POST['location'])) {
        $loc = 0;
      }else {
        $loc = $_POST['location'];
      }
      /////////////////////////////////////////
      if (empty($_POST['error'])) {
        $eror = 0;
      }else {
        $eror = $_POST['error'];
      }
      /////////////////////////////////////////
$res = editMainDaig($id,$klin1,$klin2,$klin3,$klin4,$klin5,$pat1,$pat2,$pat3,$pat4,$pat5,$entity,$etio,$loc,$eror);
echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/certain_key_view.php?certainKey1=$id'>";
 ?>
