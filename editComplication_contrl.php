<?php
include "functions_db.php";
      /////////////////////////////////////////
$id = $_POST['id_c'];
$klin1 = htmlspecialchars($_POST['compKlin1']);
$klin2 = htmlspecialchars($_POST['compKlin2']);
$klin3 = htmlspecialchars($_POST['compKlin3']);
$klin4 = htmlspecialchars($_POST['compKlin4']);
$klin5 = htmlspecialchars($_POST['compKlin5']);
$pat1 = htmlspecialchars($_POST['compPat1']);
$pat2 = htmlspecialchars($_POST['compPat2']);
$pat3 = htmlspecialchars($_POST['compPat3']);
$pat4 = htmlspecialchars($_POST['compPat4']);
$pat5 = htmlspecialchars($_POST['compPat5']);
      /////////////////////////////////////////
      if (empty($_POST['entity2'])) {
        $entity = 0;
      }else {
        $entity = $_POST['entity2'];
      }
      /////////////////////////////////////////
      if (empty($_POST['etiolog2'])) {
        $etio = 0;
      }else {
        $etio = $_POST['etiolog2'];
      }
      /////////////////////////////////////////
      if (empty($_POST['location2'])) {
        $loc = 0;
      }else {
        $loc = $_POST['location2'];
      }
      /////////////////////////////////////////
      if (empty($_POST['error2'])) {
        $eror = 0;
      }else {
        $eror = $_POST['error2'];
      }
      /////////////////////////////////////////
$res = editComplication($id,$klin1,$klin2,$klin3,$klin4,$klin5,$pat1,$pat2,$pat3,$pat4,$pat5,$entity,$etio,$loc,$eror);
echo "<meta http-equiv=refresh content='0; url=http://smd/dmd/certain_key_view.php?certainKey1=$id'>";
 ?>
