<?php
include "functions_db.php";
      /////////////////////////////////////////
$idCase = clean($_GET['id']);
$result = compareProcedure($idCase);
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Отчет по кейсу <?php echo "$idCase"; ?></title>
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
          <li class="nav-item active">
            <a class="nav-link" href="lobby.php">Лобби <span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
    </nav>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<div class="drm_main_cont">
  <div class="drm_cont">
    <table class="table table-dark">
      <thead>
      <tr>
      <th scope="col">Кейс</th>
      <th scope="col">Клинический</th>
      <th scope="col">Патологоанатомический</th>
      <th scope="col">Сравнение</th>
      </tr>
      </thead>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
      <tbody>
        <?php    for ($i=0; $i < count($result); $i++) {
            echo "<tr><th scope="."row>".$result[$i]['cd_case']."</th><td>".$result[$i]['klinMKB']."</td><td>".$result[$i]['patMKB']."</td><td>".$result[$i]['Совпадение']."</td></tr> ";
          } ?>
      </tbody>
    </table>
    <button type="button" class="btn btn-primary mb-2" name="button" onclick="javascript:(print());">Печать</button>
  </div>
</div>
  </body>
</html>
