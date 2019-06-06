<?php include "functions_db.php";
$numb = $_GET['id'];
$return = certainKey($numb);
$keysData = GetKeys();
$autCh = $return['ОбязАутоп'];
$death = $return["Дата_смерти"];
// $day = date_format($death, 'Y-m-d H:i:s');
// echo date_format($death, 'Y-m-d H:i:s');
// $myFormatForView = date("c", strtotime($return["Дата_смерти"]));
// echo "$myFormatForView";


 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Edit case</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Редактирование кейса</title>
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
          <a class="nav-link" href="lobby.php">Лобби <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
<!-- ///////////////////////////////////////////////////////////////////////////// -->
  <div class="drm_main_cont">
    <div class="drm_cont">
      <h4>Редактирование кейса № <?php echo "$numb"; ?></h4>
      <form action="editCase_cont.php?ids=<?php echo "$numb"; ?>" method="post">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="bg-success" scope="col">Пол</th>
              <th class="bg-success" scope="col">Возраст</th>
              <th class="bg-success" scope="col">Койко-дни</th>
              <th class="bg-success" scope="col">Койко-часы</th>
            </tr>
         </thead>
         <tbody class="table-success">
            <?php
                echo "<tr><td>".$return["Пол"]."</td>";
                echo "<td>".$return["Возраст"]."</td>";
                echo "<td>".$return["койко_дни"]."</td>";
                echo "<td>".$return["Койко_часы"]."</td></tr>";
            ?>
         </tbody>
        </table>
        <div class="form-row">
          <div class="col-2">
            <select class="form-control" id="exampleFormControlSelect1" name="sexsel">
              <?php
              if ($return["Пол"] == 'Мужской') {
              echo "<option selected>Мужской</option>
                <option>Женский</option> ";
              }else {
                echo "<option >Мужской</option>
                  <option selected>Женский</option> ";
              }
               ?>
            </select>
          </div>
        <div class="col-2 ml-2">
            <input type="text" class="form-control" name="ageIn" id="ageIn" placeholder="Возраст" value="<?php echo $return["Возраст"] ?>">
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
                <input type="text" aria-label="First name" class="form-control ml-3" id="days" name="days" value="<?php echo $return["койко_дни"];?>">
                <input type="time" aria-label="Last name" class="form-control ml-3" id="hour" name="hour" value="<?php echo $return["Койко_часы"];?>">
              </div>
        </div>
<!-- ///////////////////////////////////////////////////////////////////////////// -->
        <table class="table table-bordered table-striped mt-2 ml-1">
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
        <div class="form-group mt-1">
          <label for="exampleInputPassword1" class="col-sm-1">Дата смерти:</label>
          <input type="datetime-local" class="form-control row col-sm-11 ml-2" name="Date_death" id="Date_death" value="<?php echo date("c", strtotime($return["Дата_смерти"]));?>">
        </div>
        <div class="form-group mt-1">
          <label for="exampleInputPassword1" class="col-sm-1">Дата вскрытия:</label>
          <input type="datetime-local" class="form-control row col-sm-11 ml-2" name="Date_autopsy" id="Date_autopsy">
        </div>
        <div class="col-1 mt-1">
          <label for="nabl">Разница в часах</label>
          <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group mt-1">
        <label for="exampleInputPassword1" class="col-sm-3">Дата добавления:</label>
        <input type="datetime-local" class="form-control row col-sm-11 ml-2" name="Date_add" id="Date_add" placeholder="">
        </div>
<!-- ///////////////////////////////////////////////////////////////////////////// -->
        <table class="table table-bordered table-striped mt-2 ml-1">
          <thead>
            <tr>
              <th class="bg-success" scope="col">Дата окончания протокола</th>
              <th class="bg-success" scope="col">Оформление протокола(Сутки)</th>
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
        <div class="form-group">
        <label for="exampleInputPassword1" class="col-sm-10">Дата окончания протокола:</label>
        <input type="date" class="form-control row col-sm-11 ml-2" name="Date_end" id="Date_end">
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Правильность оформления свидетельства:</label>
        <select id="inputState" class="form-control" name="pos">
          <?php
          if ( $return["СовпадениеПрот"] == 'Да') {
          echo "<option selected>Да</option>
            <option>Нет</option> ";
          }else {
            echo "<option >Да</option>
              <option selected>Нет</option> ";
          }
           ?>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputState">Обязательность аутопсии:</label>
        <select id="inputState" class="form-control" name="ob_autopsy">
          <?php
          if ($autCh == 'Да') {
          echo "<option selected>Да</option>
            <option>Нет</option> ";
          }else {
            echo "<option >Да</option>
              <option selected>Нет</option> ";
          }
           ?>
        <!-- <option selected>Да</option>
        <option>Нет</option> -->
        </select>
        </div>
        <div class="input-group">
          <div class="input-group-prepend ml-2">
          <span class="input-group-text" title="Правильность оформления свидетельства">Комментарий к ПОС:</span>
          </div>
          <textarea class="form-control" aria-label="With textarea" name="pos_comm"><?php echo $return["ПОС_комм"]; ?></textarea>
        </div>
        <div class="input-group mt-3">
          <div class="input-group-prepend ml-2 ">
          <span class="input-group-text">Комментарий к аутопсии:</span>
          </div>
          <textarea class="form-control" aria-label="With textarea" name="aut_comm"><?php echo $return["Коментарий"]; ?></textarea>
        </div>
        </div>
        <button type="submit" class="btn btn-secondary mt-1 ml-1">Сохранить</button>
      </form>
<!-- ///////////////////////////////////////////////////////////////////////////// -->
    </div>
  </div>
  <script src="JS\external.js"></script>
</body>
</html>
