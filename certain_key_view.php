<?php include "functions_db.php";
$mkb = chooseMKB();
$return = certainKey($_GET['certainKey1']);
$retDiag = klinDiagnoz($_GET['certainKey1']);
$patDiag = patologDiagnoz($_GET['certainKey1']);

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
      <ul class="list-group list-group-horizontal-md">
          <li class="list-group-item list-group-item-success"><strong>Наблюдение: № </strong><?php echo $return["id_кейса"]; ?></li>
          <li class="list-group-item list-group-item-success"><strong>Пол: </strong><?php echo $return["Пол"]; ?></li>
          <li class="list-group-item list-group-item-success"><strong>Возраст: </strong><?php echo $return["Возраст"]; ?></li>
          <li class="list-group-item list-group-item-success"><strong>Койко-дни: </strong><?php echo $return["койко_дни"]; ?></li>
          <li class="list-group-item list-group-item-success"><strong>Койко-часы: </strong><?php echo $return["Койко_часы"]; ?></li>
      </ul>
      <ul class="list-group list-group-horizontal-md mt-2">
          <li class="list-group-item list-group-item-success"><strong>Дата смерти: </strong><?php echo $return["Дата_смерти"]; ?></li>
          <li class="list-group-item list-group-item-success"><strong>Дата вскрытия: </strong><?php echo $return["Дата_вскрытия"]; ?></li>
          <li class="list-group-item list-group-item-success"><strong>Разница в часах: </strong><?php echo $return["Пол"]; ?></li>
          <li class="list-group-item list-group-item-success"><strong>Дата добавления записи: </strong><?php echo $return["Дата_добавления_записи"]; ?></li>
      </ul>
      <ul class="list-group list-group-horizontal-md mt-2">
        <li class="list-group-item list-group-item-success"><strong>Дата окончания протокола: </strong><?php echo $return["ДатаПротокола"]; ?></li>
        <li class="list-group-item list-group-item-success"><strong>Оформление протокола </strong><?php echo $return["Койко_часы"]; ?> <strong>суток</strong></li>
        <li class="list-group-item list-group-item-success"><strong>Правильность оформления свидетельства: </strong><?php echo $return["СовпадениеПрот"]; ?> </br></li>
        <li class="list-group-item list-group-item-success"><strong>Обязательность аутопсии: </strong><?php echo $return["ОбязАутоп"]; ?></li>
      </ul>
      <ul class="list-group list-group-horizontal-md mt-2">
        <li class="list-group-item list-group-item-success"><strong title="Правильность оформления свидетельства">Комментарий к ПОС: </strong><?php echo $return["ПОС_комм"]; ?></li>
      </ul>
      <ul class="list-group list-group-horizontal-md mt-2">
        <li class="list-group-item list-group-item-success"><strong>Комментарий по аутопсии: </strong><?php echo $return["Коментарий"]; ?></li>
      </ul>
</div>
<div id="txt_2">
      <div class="d_mkb">
        <div class="klinika">
        <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">Номер МКБ</th>
          <th scope="col">Клинический диагноз</th>
          <th scope="col">Номер МКБ</th>
          <th scope="col">Патологоанатомический диагноз</th>
        </tr>
      </thead>
      <tbody>
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
<div class="list-group" id="list">
  <a href="http://smd/dmd/lobby.php" class="list-group-item list-group-item-action list-group-item-danger">Go back</a>
</div>
      </div>

    </div>
<script src="external.js"></script>
    <script>
   function agreeForm(f) {
    // Если поставлен флажок, снимаем блокирование кнопки
    if (f.inlineRadio1.checked) {f.hour.disabled = 1;
      f.days.disabled = 0;
    }
    // В противном случае вновь блокируем кнопку
    else if (f.inlineRadio2.checked) {
      f.days.disabled = 1;
      f.hour.disabled = 0;
    }
   }
  </script>
  </body>
</html>
