<?php include "functions_db.php";

 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SMD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">СУД</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <button type="button" class="btn btn-outline-success" id="but1">Привет,<?php ?></a></button>

          </form>
        </div>
      </nav>
      </div>


      <div class="lobby_main_cont">
        <div class="lobby_cont">
          <h1>Поиск по кейсу</h1>
            <form class="form-inline" action="certain_keys_contr.php" method="post">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Кейс:</span>
                </div>
                <input type="text" class="form-control" id="certainKey1" name="certainKey1" placeholder="Номер" aria-label="Cert_key" aria-describedby="basic-addon1">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Найти и показать</button>
            </form>

        </div>
      </div>
    </body>
  </body>
</html>
