<?php include "functions_db.php";
// $mkb = chooseMKB();
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
<script src="external.js"></script>

  </body>
</html>
