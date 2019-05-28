<?php include "functions_db.php";
$mkb = chooseMKB();
$numb = $_GET['certainKey1'];
$next = $numb + 1;
$previous = $numb -1;
$return = certainKey($_GET['certainKey1']);
$retDiag = klinDiagnoz($_GET['certainKey1']);
$patDiag = patologDiagnoz($_GET['certainKey1']);
// $ddays = getDay($numb);
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Lobby</title>
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
        <!-- <form class="form-inline my-2 my-lg-0">
          <button type="button" class="btn btn-outline-success" id="but1">Привет,</a></button>

        </form> -->
      </div>
    </nav>
    </div>
<div class="drm_main_cont">
  <div class="drm_cont">
    <div class="tabs">
        <input type="radio" name="inset" value="" id="tab_1" checked>
        <label for="tab_1">Кейс</label>

        <input type="radio" name="inset" value="" id="tab_2">
        <label for="tab_2">Диагноз по МКБ</label>

        <input type="radio" name="inset" value="" id="tab_3">
        <label for="tab_3">Основное</label>

        <input type="radio" name="inset" value="" id="tab_4">
        <label for="tab_4">Осложнения</label>

        <input type="radio" name="inset" value="" id="tab_5">
        <label for="tab_5">Сопутствующие</label>

  <!-- Раздел 1 -->

<div id="txt_1">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="bg-success" scope="col">Наблюдение</th>
        <th class="bg-success" scope="col">Пол</th>
        <th class="bg-success" scope="col">Возраст</th>
        <th class="bg-success" scope="col">Койко-дни</th>
        <th class="bg-success" scope="col">Койко-часы</th>
      </tr>
   </thead>
   <tbody class="table-success">
      <?php
          echo "<tr><td>".$return["id_кейса"]."</td>";
          echo "<td>".$return["Пол"]."</td>";
          echo "<td>".$return["Возраст"]."</td>";
          echo "<td>".$return["койко_дни"]."</td>";
          echo "<td>".$return["Койко_часы"]."</td></tr>";
      ?>
   </tbody>
  </table>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="bg-success" scope="col">Дата смерти</th>
        <th class="bg-success" scope="col">Дата вскрытия</th>
        <th class="bg-success" scope="col">Разница в часах</th>
        <th class="bg-success" scope="col">Дата добавления записи</th>
      </tr>
   </thead>
   <tbody class="table-success">
      <?php
          echo "<tr><td>".$return["Дата_смерти"]."</td>";
          echo "<td>".$return["Дата_вскрытия"]."</td>";
          echo "<td>"."</td>";
          echo "<td>".$return["Дата_добавления_записи"]."</td></tr>";
      ?>
   </tbody>
  </table>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="bg-success" scope="col">Дата окончания протокола</th>
        <th class="bg-success" scope="col">Оформление протокола</th>
        <th class="bg-success" scope="col">Правильность оформления свидетельства</th>
        <th class="bg-success" scope="col">Обязательность аутопсии</th>
      </tr>
   </thead>
   <tbody class="table-success">
      <?php
          echo "<tr><td>".$return["ДатаПротокола"]."</td>";
          echo "<td>".$ddays["Name_exp_2"]."</td>";
          echo "<td>".$return["СовпадениеПрот"]."</td>";
          echo "<td>".$return["ОбязАутоп"]."</td></tr>";
      ?>
   </tbody>
  </table>
      <ul class="list-group list-group-horizontal-md mt-2">
        <li class="list-group-item list-group-item-success"><strong title="Правильность оформления свидетельства">Комментарий к ПОС: </strong><?php echo $return["ПОС_комм"]; ?></li>
      </ul>
      <ul class="list-group list-group-horizontal-md mt-2">
        <li class="list-group-item list-group-item-success"><strong>Комментарий по аутопсии: </strong><?php echo $return["Коментарий"]; ?></li>
      </ul>
</div>
 <!-- Диагноз по МКБ - раздел 2 -->
<div id="txt_2">
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
  </div>
</div>
<div id="txt_3">
    <h5>Заключительный диагноз - основное.</h5>
      <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">K-1</span>
          </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступление(К)"]; ?></textarea>
            <div class="input-group-prepend ml-1">
              <span class="input-group-text">P-1</span>
            </div>
              <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступление(П)"]; ?></textarea>
      </div>
      <div class="input-group mt-1">
          <div class="input-group-prepend">
            <span class="input-group-text">K-2</span>
          </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступК2"]; ?></textarea>
          <div class="input-group-prepend ml-1">
              <span class="input-group-text">P-2</span>
          </div>
              <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступП2"]; ?></textarea>
      </div>
      <div class="input-group mt-1">
          <div class="input-group-prepend">
            <span class="input-group-text">K-3</span>
          </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступК3"]; ?></textarea>
            <div class="input-group-prepend ml-1">
              <span class="input-group-text">P-3</span>
            </div>
              <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступП3"]; ?></textarea>
      </div>
      <div class="input-group mt-1">
          <div class="input-group-prepend">
            <span class="input-group-text">K-4</span>
          </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступК4"]; ?></textarea>
            <div class="input-group-prepend ml-1">
              <span class="input-group-text">P-4</span>
            </div>
              <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступП4"]; ?></textarea>
      </div>
      <div class="input-group mt-1">
          <div class="input-group-prepend">
            <span class="input-group-text">K-5</span>
          </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступК5"]; ?></textarea>
            <div class="input-group-prepend ml-1">
              <span class="input-group-text">P-5</span>
            </div>
              <textarea class="form-control" aria-label="With textarea"><?php echo $return["Основное_поступП5"]; ?></textarea>
      </div>
      <h5>Признак несовпадения:</h5>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" >
        <label class="form-check-label" for="defaultCheck1">
          Сущность
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked="<?php if ($return['Этиология_1'] == 0) {echo "checked";} ?>">
        <label class="form-check-label" for="defaultCheck2">
          Этиология
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
        <label class="form-check-label" for="defaultCheck2">
          Локализация
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
        <label class="form-check-label" for="defaultCheck2">
          Ошибочная трактовка
        </label>
      </div>

        <p>Пояснение:</p>
        <ul class="list2">
          <li>K(1-5) - клинический диагноз с соответствующим номером.</li>
          <li>P(1-5) - патологоанатомический диагноз с соответствующим номером.</li>
        </ul>
</div>
<div id="txt_4">
  <h5>Заключительный диагноз - осложнения.</h5>
    <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">K-1</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Осложнения_К"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-1</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Осложнения_П"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-2</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_2_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-2</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_2_пд"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-3</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_3_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-3</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_3_пд"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-4</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_4_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-4</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_4_пд"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-5</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_5_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-5</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Ослож_5_пд"]; ?></textarea>
    </div>
    <p>Пояснение:</p>
    <ul class="list2">
      <li>K(1-5) - клинический диагноз с соответствующим номером.</li>
      <li>P(1-5) - патологоанатомический диагноз с соответствующим номером.</li>
    </ul>
</div>
<div id="txt_5">
  <h5>Сопутствующие диагнозы.</h5>
    <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">K-1</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопутствующие_диагнозы(К)"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-1</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопутствующие_диагнозы(П)"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-2</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_2_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-2</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_2_пд"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-3</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_3_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-3</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_3_пд"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-4</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_4_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-4</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_4_пд"]; ?></textarea>
    </div>
    <div class="input-group mt-1">
        <div class="input-group-prepend">
          <span class="input-group-text">K-5</span>
        </div>
          <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_5_кд"]; ?></textarea>
        <div class="input-group-prepend ml-1">
            <span class="input-group-text">P-5</span>
        </div>
            <textarea class="form-control" aria-label="With textarea"><?php echo $return["Сопут_5_пд"]; ?></textarea>
    </div>
    <p>Пояснение:</p>
    <ul class="list2">
      <li>K(1-5) - клинический диагноз с соответствующим номером.</li>
      <li>P(1-5) - патологоанатомический диагноз с соответствующим номером.</li>
    </ul>
</div>
</div>
<div class="btn-group mt-1" role="group" aria-label="Basic example">
  <?php echo $ddays["Name_exp_2"] ?>
  <a href="http://smd/dmd/certain_key_view.php?certainKey1=<?php echo "$previous"; ?> " class="btn btn-dark">Предыдущий кейс</a>
  <a href="http://smd/dmd/lobby.php" class="btn btn-dark">Обратно</a>
  <a href="http://smd/dmd/certain_key_view.php?certainKey1=<?php echo "$next"; ?> " class="btn btn-dark">Следующий кейс</a>
</div>
<div class="btn-group mt-1" role="group" aria-label="Basic example">
  <a href="#" class="btn btn-dark">Добавить кейс</a>
  <a href="#" class="btn btn-dark">Удалить кейс</a>
  <a href="http://smd/dmd/editcase.php?id=<?php echo $numb ?>" class="btn btn-dark">Редактировать кейс</a>
</div>
</div>
</div>
<script src="external.js"></script>

  </body>
</html>
