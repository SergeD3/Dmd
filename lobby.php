<?php include "functions_db.php";
session_start();
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Lobby</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dd7a2545f2.js"></script>
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
          <li class="nav-item">
            <a class="nav-link" href="lobby.php">Лобби</a>
          </li>
        </ul>
        <ul class="navbar-nav float-right">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Привет,<?php echo $_SESSION['login']; ?>
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="out.php">Выход</a>
              </div>
            </div>
          </div>
          <!-- <button type="button" class="btn btn-outline-success mr-1" data-toggle="modal" data-target="#exampleModal"> -->

          </button>
        </ul>
      </div>

    </nav>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div class="lobby_main_cont">
      <div class="lobby_cont">
        <h4>Поиск определенного кейса:</h4>
          <form class="form-inline" action="certain_key_view.php" method="get">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Кейс:</span>
              </div>
              <input type="text" class="form-control" id="certainKey1" name="certainKey1" placeholder="Номер" aria-label="Cert_key" aria-describedby="basic-addon1">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Найти и показать</button>
          </form>
          <hr class="hr1">
          <h4>Добавление кейса в базу данных:</h4>
          <a class="btn btn-primary" href="addCase.php" role="button">Добавить</a>
          <hr class="hr1">
          <h4>Удаление кейса из базы данных:</h4>
          <form class="form-inline" action="deleteCase_contrl.php" method="post">
            <div class="form-group mx-sm-1">
              <input type="text" name="delCase" class="form-control" id="inputZip" placeholder="Номер кейса">
            </div>
            <button type="submit" class="btn btn-primary mx-sm-1">Подтвердите удаление</button>
          </form>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
      </div>
    </div>
  </body>
</html>
