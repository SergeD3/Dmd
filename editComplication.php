<?php include "functions_db.php";
$mkb = chooseMKB();
$numb = $_GET['id'];
$next = $numb + 1;
$previous = $numb -1;
$return = certainKey($_GET['id']);
$retDiag = klinDiagnoz($_GET['id']);
$patDiag = patologDiagnoz($_GET['id']);
session_start();
// $ddays = getDay($numb);
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Редактирование осложнений</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dd7a2545f2.js"></script>
  </head>
  <body>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
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
          <li class="nav-item active"><a class="nav-link" href="lobby.php">СУД <span class="sr-only"></span></a></li>
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
    </div>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<div class="drm_main_cont">
  <div class="drm_cont">
      <h5>Редактирование осложнений по кейсу № <?php echo "$numb"; ?></h5>
      <form class="" action="editComplication_contrl.php" method="post">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">K-1</span>
            </div>
              <textarea class="form-control" name="compKlin1" aria-label="With textarea"><?php echo $return["Осложнения_К"]; ?></textarea>
            <div class="input-group-prepend ml-1">
                <span class="input-group-text">P-1</span>
            </div>
                <textarea class="form-control" name="compPat1" aria-label="With textarea"><?php echo $return["Осложнения_П"]; ?></textarea>
        </div>
        <div class="input-group mt-1">
            <div class="input-group-prepend">
              <span class="input-group-text">K-2</span>
            </div>
              <textarea class="form-control" name="compKlin2" aria-label="With textarea"><?php echo $return["Ослож_2_кд"]; ?></textarea>
            <div class="input-group-prepend ml-1">
                <span class="input-group-text">P-2</span>
            </div>
                <textarea class="form-control" name="compPat2" aria-label="With textarea"><?php echo $return["Ослож_2_пд"]; ?></textarea>
        </div>
        <div class="input-group mt-1">
            <div class="input-group-prepend">
              <span class="input-group-text">K-3</span>
            </div>
              <textarea class="form-control" name="compKlin3" aria-label="With textarea"><?php echo $return["Ослож_3_кд"]; ?></textarea>
            <div class="input-group-prepend ml-1">
                <span class="input-group-text">P-3</span>
            </div>
                <textarea class="form-control" name="compPat3" aria-label="With textarea"><?php echo $return["Ослож_3_пд"]; ?></textarea>
        </div>
        <div class="input-group mt-1">
            <div class="input-group-prepend">
              <span class="input-group-text">K-4</span>
            </div>
              <textarea class="form-control" name="compKlin4" aria-label="With textarea"><?php echo $return["Ослож_4_кд"]; ?></textarea>
            <div class="input-group-prepend ml-1">
                <span class="input-group-text">P-4</span>
            </div>
                <textarea class="form-control" name="compPat4" aria-label="With textarea"><?php echo $return["Ослож_4_пд"]; ?></textarea>
        </div>
        <div class="input-group mt-1">
            <div class="input-group-prepend">
              <span class="input-group-text">K-5</span>
            </div>
              <textarea class="form-control" name="compKlin5" aria-label="With textarea"><?php echo $return["Ослож_5_кд"]; ?></textarea>
            <div class="input-group-prepend ml-1">
                <span class="input-group-text">P-5</span>
            </div>
                <textarea class="form-control" name="compPat5" aria-label="With textarea"><?php echo $return["Ослож_5_пд"]; ?></textarea>
        </div>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
        <p title="Если признак совпадает, то необходимо поставить галочку"><strong>Признак несовпадения:</strong></p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="entity2" value="-1" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Сущность
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="etiolog2" value="-1" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Этиология
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="location2" value="-1" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Локализация
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="error2" value="-1" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Ошибочная трактовка
              </label>
            </div>
            <input type="text" name="id_c" value="<?php echo "$numb"; ?>" hidden>
        <button type="submit" name="butt" class="btn btn-dark mt-2 mb-2">Сохранить</button>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModalLong">
          Помощь
        </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Общая информация</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Пояснение:</p>
            <ul class="list2">
              <li>K(1-5) - клинический диагноз с соответствующим номером.</li>
              <li>P(1-5) - патологоанатомический диагноз с соответствующим номером.</li>
            </ul>
            <p>Если признак совпадает необходимо выставить флажок. Признаки которые не совпадают должны остаться неотмеченными.</p>
            <p>При каждом редактировании кейса, проверяйте правильность выставленных флажков! Если не выставить флажки, то в базу данных
            запишутся значения установленные системой по умолчанию, имейте это ввиду.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
        </form>
</div>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
  </body>
</html>
