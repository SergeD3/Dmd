<?php include "functions_db.php";
$getHosp = getAllHosp();   ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div class="content" align= "center">
  <div class="cont">
<h2>Регистрация:</h2>
<hr>
  <form class="sign_up" action="Reg_controller.php" method="post">
    <label for="fio">Введите ваше ФИО:</label>
      <input type="text" name="fio" id="fio">
    <label for="username">Введите ваш логин:</label>
      <input type="text" name="username" id ="username">
    <label for="passw">Введите ваш пароль:</label>
      <input type="password" name="passw" id="passw">
    <label for="passw1">Введите ваш пароль ещё раз:</label>
      <input type="password" name="passw1" id="passw1">
    <label for="diplom">Введите ваш номер диплома:</label>
      <input type="text" name="diplom" id="diplom">
    <label for="phone">Введите ваш номер телефона:</label>
      <input type="text" name="phone" id="phone">
    <label for="hosp">Выберите ваше место работы:</label>
    <br>
    <select class="form-control row col-sm-6 ml-2" name="Sel_hosp" id="Sel_hosp" size="1">
                 <?php
                   for($i=0; $i<count($getHosp); $i++){
                     $id_loc=$getHosp[$i]["id_hosp"];
                     $loc=$getHosp[$i]["название"];
                     echo "<option value =$id_loc>$loc</option>";
                   }
                 ?>
               </select>
    <label for="mail">Укажите вашу электронную почту:</label>
      <input type="text" name="mail" id="mail">
    <hr>
    <button class="accept" type="submit" name="button">Регистрация</button>
    <button class="res" type="reset" name="button">Сбросить</button>

  </form>
  </div>
  </div>

  </body>
</html>
