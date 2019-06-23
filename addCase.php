<?php include "functions_db.php";
$mkb = chooseMKB();
session_start();
// $numb = $_GET['certainKey1'];
// $next = $numb + 1;
// $previous = $numb -1;
// $return = certainKey($_GET['certainKey1']);
// $retDiag = klinDiagnoz($_GET['certainKey1']);
// $patDiag = patologDiagnoz($_GET['certainKey1']);
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
          <a class="nav-link" href="smd/dmd/index.php">Главная <span class="sr-only">(current)</span></a>
        </li>
      </ul>
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
    </div>
  </nav>
  <!-- ///////////////////////////////////////////////////////////////////////////////// -->
  <div class="drm_main_cont">
  <div class="drm_cont">
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<form action="addCase_contrl.php" method="post">
  <h5>Форма добавления нового кейса:</h5>
      <div class="form-row">
        <div class="col-2">
          <select class="form-control" id="exampleFormControlSelect1" name="sexsel">
            <?php
            echo "<option >Мужской</option>
              <option selected>Женский</option> ";
             ?>
          </select>
        </div>
      <div class="col-2 ml-2">
          <input type="text" class="form-control" name="ageIn" id="ageIn" placeholder="Возраст" value="">
      </div>
      <div class="koyki_box ml-2">
      <label for="koyki" class="koyki">Койко-дни: </label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="agreeForm(this.form)">
        <label class="form-check-label" for="inlineRadio1">Дни</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick="agreeForm(this.form)">
        <label class="form-check-label" for="inlineRadio2">Часы</label>
        <input type="text" aria-label="First name" class="form-control ml-3" id="days" name="days" value="">
        <input type="time" aria-label="Last name" class="form-control ml-3" id="hour" name="hour" value="">
      </div>
      </div>
<!-- ///////////////////////////////////////////////////////////////////////////// -->
      <div class="form-group mt-1">
        <label for="exampleInputPassword1" class="col-sm-1">Дата смерти:</label>
        <input type="datetime-local" class="form-control row col-sm-11 ml-1" name="Date_death" id="Date_death" value="">
      </div>
      <div class="form-group mt-1">
        <label for="exampleInputPassword1" class="col-sm-1">Дата вскрытия:</label>
        <input type="datetime-local" class="form-control row col-sm-11 ml-2" name="Date_autopsy" id="Date_autopsy">
      </div>
      <div class="col-1 mt-1" hidden>
        <label for="nabl">Разница в часах</label>
        <input type="text" class="form-control" disabled>
      </div>
<!-- ///////////////////////////////////////////////////////////////////////////// -->
      <div class="form-group mt-1">
      <label for="exampleInputPassword1" class="col-sm-10">Дата окончания протокола:</label>
      <input type="date" class="form-control row col-sm-11 ml-2" name="Date_end" id="Date_end">
      </div>
      <div class="form-group col-md-3 mt-1">
      <label for="inputState">Правильность оформления свидетельства:</label>
      <select id="inputState" class="form-control" name="pos">
        <?php
        echo "<option selected>Да</option>
          <option>Нет</option> ";
         ?>
      </select>
      </div>
      <div class="form-group col-md-2">
      <label for="inputState">Обязательность аутопсии:</label>
      <select id="inputState" class="form-control" name="ob_autopsy">
        <?php
        echo "<option selected>Да</option>
          <option>Нет</option> ";
         ?>
      </select>
      </div>
      <div class="input-group">
        <div class="input-group-prepend ml-2">
        <span class="input-group-text" title="Правильность оформления свидетельства">Комментарий к ПОС:</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" name="pos_comm"></textarea>
      </div>
      <div class="input-group mt-3">
        <div class="input-group-prepend ml-2 ">
        <span class="input-group-text">Комментарий к аутопсии:</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" name="aut_comm"></textarea>
      </div>
      </div>
      <div class="btn-group mt-2 ml-1 mb-2" role="group" aria-label="Basic example">
        <button type="submit" class="btn btn-dark">Сохранить</button>
        <a class="btn btn-dark" href="lobby.php" role="button">Отменить</a>
        <button type="reset" class="btn btn-dark">Сбросить</button>
      </div>
</form>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
  </div>
  </div>
  <script type="JS\external.js"></script>
</body>
 </html>
