<?php
include "functions_db.php";
      /////////////////////////////////////////
$id = $_POST['id_c'];
      /////////////////////////////////////////
$sopK0 = clean($_POST['sopKlin0']);
$sopK1 = clean($_POST['sopKlin1']);
$sopK2 = clean($_POST['sopKlin2']);
$sopK3 = clean($_POST['sopKlin3']);
$sopK4 = clean($_POST['sopKlin4']);
      /////////////////////////////////////////
$sopP0 = clean($_POST['sopPat0']);
$sopP1 = clean($_POST['sopPat1']);
$sopP2 = clean($_POST['sopPat2']);
$sopP3 = clean($_POST['sopPat3']);
$sopP4 = clean($_POST['sopPat4']);
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
