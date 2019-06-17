<?php
include "functions_db.php";
      /////////////////////////////////////////
$id = $_POST['id_c'];
$sopK = $_POST['sopKlin'];
$sopP = $_POST['sopPat'];
      /////////////////////////////////////////
$sopK0 = clean($sopK[0]);
$sopK1 = clean($sopK[1]);
$sopK2 = clean($sopK[2]);
$sopK3 = clean($sopK[3]);
$sopK4 = clean($sopK[4]);
      /////////////////////////////////////////
$sopP0 = clean($sopP[0]);
$sopP1 = clean($sopP[1]);
$sopP2 = clean($sopP[2]);
$sopP3 = clean($sopP[3]);
$sopP4 = clean($sopP[4]);
      /////////////////////////////////////////
      if (empty($_POST['entity3'])) {
        $entity = 0;
      }else {
        $entity = $_POST['entity3'];
      }
      /////////////////////////////////////////
      if (empty($_POST['etiolog3'])) {
        $etio = 0;
      }else {
        $etio = $_POST['etiolog3'];
      }
      /////////////////////////////////////////
      if (empty($_POST['location3'])) {
        $loc = 0;
      }else {
        $loc = $_POST['location3'];
      }
      /////////////////////////////////////////
      if (empty($_POST['error3'])) {
        $eror = 0;
      }else {
        $eror = $_POST['error3'];
      }
      /////////////////////////////////////////
$res = editAccomp($id,$sopK0,$sopK1,$sopK2,$sopK3,$sopK4,$sopP0,$sopP1,$sopP2,$sopP3,$sopP4,$entity,$etio,$loc,$eror);
echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/certain_key_view.php?certainKey1=$id'>";
 ?>
