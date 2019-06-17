<?php include "functions_db.php";
$mkb = chooseMKB();
// $numb = $_GET['certainKey1'];
// // $next = $numb + 1;
// // $previous = $numb -1;
// $return = certainKey($_GET['certainKey1']);
// $retDiag = klinDiagnoz($_GET['certainKey1']);
// $patDiag = patologDiagnoz($_GET['certainKey1']);

 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Addcase</title>
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
  <form>
    <div class="form-row">
      <div class="col-2">
        <select class="form-control" id="exampleFormControlSelect1" title="Если оставить Пол, то данные не сохранятся!">
          <option checked>Пол</option>
          <option>Мужской</option>
          <option>Женский</option>
        </select>
      </div>
    <div class="col-2">
        <input type="text" class="form-control" placeholder="Возраст">
    </div>
      <div class="koyki_box ml-1">
          <label for="koyki" class="koyki">Койко-дни: </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="agreeForm(this.form)">
            <label class="form-check-label" for="inlineRadio1">Дни</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick="agreeForm(this.form)">
            <label class="form-check-label" for="inlineRadio2">Часы</label>
            <input type="text" aria-label="First name" class="form-control ml-1" id="days" placeholder="Дни" ><br>
            <input type="text" aria-label="Last name" class="form-control ml-1" id="hour" placeholder="Часы">
          </div>
    </div>
    <div class="form-group mt-1">
      <label for="exampleInputPassword1" class="col-sm-1">Дата смерти:</label>
      <input type="date" class="form-control row col-sm-11 ml-2" name="Date_death" id="Date_death" placeholder="">
    </div>
    <div class="form-group mt-1">
      <label for="exampleInputPassword1" class="col-sm-1">Дата вскрытия:</label>
      <input type="date" class="form-control row col-sm-11 ml-2" name="Date_autopsy" id="Date_autopsy" placeholder="">
    </div>
    <div class="col-1 mt-1">
      <label for="nabl">Разница в часах</label>
      <input type="text" class="form-control" disabled>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm-3">Дата добавления:</label>
    <input type="date" class="form-control row col-sm-11 ml-2" name="Date_add" id="Date_add" placeholder="">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm-10">Дата окончания протокола:</label>
    <input type="date" class="form-control row col-sm-11 ml-2" name="Date_end" id="Date_end" placeholder="">
    </div>
    <div class="form-group col-md-3">
    <label for="inputState">Правильность оформления свидетельства:</label>
    <select id="inputState" class="form-control">
    <option selected>Да</option>
    <option>Нет</option>
    </select>
    </div>
    <div class="form-group col-md-2">
    <label for="inputState">Обязательность аутопсии:</label>
    <select id="inputState" class="form-control">
    <option selected>Да</option>
    <option>Нет</option>
    </select>
    </div>
    <div class="input-group">
    <div class="input-group-prepend ml-2">
    <span class="input-group-text" title="Правильность оформления свидетельства">Комментарий к ПОС:</span>
    </div>
    <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="input-group mt-3">
    <div class="input-group-prepend ml-2 ">
    <span class="input-group-text">Комментарий к аутопсии:</span>
    </div>
    <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    </div>
    <hr class="hr1">
    <h5>Диагноз по МКБ</h5>
    <div class="d_mkb">
      <h5>Заключительный клинический диагноз</h5>
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
 <!-- Диагноз по МКБ - раздел 2 -->
<div id="txt_2">

</div>
<div id="txt_4">

</div>
<div id="txt_5">

</div>
</div>
<!-- <div class="btn-group mt-1" role="group" aria-label="Basic example">
  <a href="http://smd/dmd/certain_key_view.php?certainKey1=<?php echo "$previous"; ?> " class="btn btn-dark">Предыдущий кейс</a>
  <a href="http://smd/dmd/lobby.php" class="btn btn-dark">Обратно</a>
  <a href="http://smd/dmd/certain_key_view.php?certainKey1=<?php echo "$next"; ?> " class="btn btn-dark">Следующий кейс</a>
</div>
<div class="btn-group mt-1" role="group" aria-label="Basic example">
  <a href="http://smd/dmd/certain_key_view.php?certainKey1=<?php echo "$previous"; ?> " class="btn btn-dark">Добавить кейс</a>
  <a href="http://smd/dmd/lobby.php" class="btn btn-dark">Удалить кейс</a>
</div> -->
</div>
</div>
<script>function agreeForm(f) {
// Если поставлен флажок, снимаем блокирование кнопки
if (f.inlineRadio1.checked) {f.hour.disabled = 1;
  f.days.disabled = 0;
}
// В противном случае вновь блокируем кнопку
else if (f.inlineRadio2.checked) {
  f.days.disabled = 1;
  f.hour.disabled = 0;
}
}</script>

  </body>
</html>
