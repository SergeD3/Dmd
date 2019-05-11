<?php include "functions_db.php";
$mkb = chooseMKB();
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Lobby</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<form class="select_data" action="sd_keys_controller.php" method="GET">
  <div class="form-row">
    <div class="form-group col-md-2">
          <label for="inputZip">Наблюдение</label>
          <input type="text" class="form-control" id="inputZip" placeholder="check" disabled>
        </div>

    <button type="button" class="btn btn-outline-dark ml-2">Найти и показать</button>
<a href="C:\OSPanel\domains\smd.ru\Dmd\lobby.php"></a>
</div>
</form>
<form class="select_data mt-2" action="sd_keys_controller.php" method="GET">
  <div class="form-row">


    <button type="button" class="btn btn-outline-dark ml-2">Вывести все кейсы</button>

</div>
</form>
    </div>
    <div id="txt_2">
      <div class="d_mkb">
        <h5>Заключительный клинический диагноз</h5>

          <form class="" action="index.html" method="post">

            <div class="dropdown_select">

        <select class="form-control row col-sm-5 ml-1" name="ch_mkb" id="ch_mkb" size="1">
                     <?php
                       for($i=0; $i<count($mkb); $i++){
                         $id_loc=$mkb[$i]["id_МКБ"];
                         $loc=$mkb[$i]["Диагноз"];
                         echo "<option value =$id_loc>$loc</option>";
                       }
                     ?>
                   </select>
                   </div>
        </div>
        </form>
    </div>
    <div id="txt_3">
        <p>Размеры содержимого вкладок</p>
        <p>могут отличаться по высоте!</p>
    </div>
    <div id="txt_4">

    </div>
    <div id="txt_5">

    </div>
</div>
      </div>
    </div>
  </body>
</html>
