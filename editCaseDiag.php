<?php include "functions_db.php";
$mkb = chooseMKB();
$numb = $_GET['id'];
$next = $numb + 1;
$previous = $numb -1;
$return = certainKey($_GET['id']);
$retDiag = klinDiagnoz($_GET['id']);
$patDiag = patologDiagnoz($_GET['id']);
// $ddays = getDay($numb);

 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Редактирование диагнозов</title>
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
            <a class="nav-link" href="smd/dmd/index.php">Главная <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="drm_main_cont">
  <div class="drm_cont">
    <div class="d_mkb">
      <div class="klinika">
      <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="bg-success" scope="col">Номер МКБ</th>
              <th class="bg-success" scope="col">Клинический диагноз</th>
              <th class="bg-success" scope="col">Номер МКБ</th>
              <th class="bg-success" scope="col">Патологоанатомический диагноз</th>
            </tr>
          </thead>
          <tbody class="table-success">
            <?php
            for($i=0; $i<count($retDiag);$i++){
                echo "<tr><td>".$retDiag[$i]["id_МКБ"]."</td>";
                echo "<td>".$retDiag[$i]["Диагноз"]."</td>";
                echo "<td>".$patDiag[$i]["id_МКБ"]."</td>";
                echo "<td>".$patDiag[$i]["Диагноз"]."</td></tr>";
                }
            ?>
          </tbody>
        </table>
  </div>
  <form class="klinPat" action="editDiag_contr.php" method="post">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">1</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <?php
          for($i=0; $i<count($mkb); $i++){
            $id_loc=$mkb[$i]["id_МКБ"];
            $loc=$mkb[$i]["Диагноз"];
            echo "<option value =$id_loc>$loc</option>";
          }
           ?>
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">2</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <?php
          for($i=0; $i<count($mkb); $i++){
            $id_loc=$mkb[$i]["id_МКБ"];
            $loc=$mkb[$i]["Диагноз"];
            echo "<option value =$id_loc>$loc</option>";
          }
           ?>
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">3</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <?php
          for($i=0; $i<count($mkb); $i++){
            $id_loc=$mkb[$i]["id_МКБ"];
            $loc=$mkb[$i]["Диагноз"];
            echo "<option value =$id_loc>$loc</option>";
          }
           ?>
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">4</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <?php
          for($i=0; $i<count($mkb); $i++){
            $id_loc=$mkb[$i]["id_МКБ"];
            $loc=$mkb[$i]["Диагноз"];
            echo "<option value =$id_loc>$loc</option>";
          }
           ?>
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">5</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <?php
          for($i=0; $i<count($mkb); $i++){
            $id_loc=$mkb[$i]["id_МКБ"];
            $loc=$mkb[$i]["Диагноз"];
            echo "<option value =$id_loc>$loc</option>";
          }
           ?>
        </select>
      </div>
  </form>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <button type="submit" class="btn btn-secondary mt-1 ml-1 mb-2">Сохранить</button>

</div>
  </div>
</div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  </body>
</html>
