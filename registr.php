<?php include "functions_db.php";
$getHosp = getAllHosp();
  ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SMD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
<div class="lobby_main_cont">
  <div class="lobby_cont">
    <h2>Регистрация:</h2>
    <hr>
    <form class="sign_up" action="Reg_controller.php" method="post">
            <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="reg0" placeholder="Введите ФИО">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="reg1" placeholder="Введите логин">
            </div>
          </div>
          <div class="row">
          <div class="col mt-2">
            <input type="password" class="form-control" name="reg2" id="inputPassword2" placeholder="Введите пароль" title="Этот пароль вы будете использовать для входа в систему!">
          </div>
          <div class="col mt-2">
            <input type="password" class="form-control" name="reg3" id="inputPassword2" placeholder="Введите пароль ещё раз" title="Этот пароль вы будете использовать для входа в систему!">
          </div>
        </div>
        <hr>
        <div class="row">
        <div class="col mt-2">
          <input type="text" class="form-control" name="reg4" placeholder="Введите номер диплома" title="Номер вашего диплома">
        </div>
        <div class="col mt-2">
          <input type="text" class="form-control" name="reg5" placeholder="Введите номер телефона" title="Без знака + перед номером">
        </div>
        </div>
        <hr>
        <div class="form-group">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="exampleFormControlSelect1">Ваше место работы:</label>
              <select class="form-control" name="reg6" id="exampleFormControlSelect1">
                <?php
                  for($i=0; $i<count($getHosp); $i++){
                    $id_loc=$getHosp[$i]["id_hosp"];
                    $loc=$getHosp[$i]["название"];
                    echo "<option value =$id_loc>$loc</option>";
                  }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Ваш Email</label>
              <input type="email" class="form-control" name="reg7" id="inputEmail4" placeholder="Email">
            </div>
            </div>
            <div class="btn-group mt-2 ml-1 mb-2" role="group" aria-label="Basic example">
              <button type="submit" class="btn btn-dark">Сохранить</button>
              <a class="btn btn-dark" href="index.php" role="button">Отменить</a>
              <button type="reset" class="btn btn-dark">Сбросить</button>
            </div>
    </form>
  </div>
</div>
  </body>
</html>
