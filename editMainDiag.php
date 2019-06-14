<?php
include "functions_db.php";
$mkb = chooseMKB();
$numb = $_GET['id'];
$next = $numb + 1;
$previous = $numb -1;
$return = certainKey($_GET['id']);
$retDiag = klinDiagnoz($_GET['id']);
$patDiag = patologDiagnoz($_GET['id']);

 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Редактирование основных диагнозов</title>
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
      </div>
    </nav>
    </div>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<div class="drm_main_cont">
  <div class="drm_cont">
    <form class="" action="editMainDiag_contr.php" method="post">
          <h5>Редактирование основных диагнозов по кейсу № <?php echo "$numb"; ?></h5>
          <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">K-1</span>
              </div>
                <textarea class="form-control" name="klin1" aria-label="With textarea"><?php echo $return["Основное_поступлениеК"]; ?></textarea>
                <div class="input-group-prepend ml-1">
                  <span class="input-group-text">P-1</span>
                </div>
                  <textarea class="form-control" name="pat1" aria-label="With textarea"><?php echo $return["Основное_поступлениеП"]; ?></textarea>
          </div>
          <div class="input-group mt-1">
              <div class="input-group-prepend">
                <span class="input-group-text">K-2</span>
              </div>
                <textarea class="form-control" name="klin2" aria-label="With textarea"><?php echo $return["Основное_поступК2"]; ?></textarea>
              <div class="input-group-prepend ml-1">
                  <span class="input-group-text">P-2</span>
              </div>
                  <textarea class="form-control" name="pat2" aria-label="With textarea"><?php echo $return["Основное_поступП2"]; ?></textarea>
          </div>
          <div class="input-group mt-1">
              <div class="input-group-prepend">
                <span class="input-group-text">K-3</span>
              </div>
                <textarea class="form-control" name="klin3" aria-label="With textarea"><?php echo $return["Основное_поступК3"]; ?></textarea>
                <div class="input-group-prepend ml-1">
                  <span class="input-group-text">P-3</span>
                </div>
                  <textarea class="form-control" name="pat3" aria-label="With textarea"><?php echo $return["Основное_поступП3"]; ?></textarea>
          </div>
          <div class="input-group mt-1">
              <div class="input-group-prepend">
                <span class="input-group-text">K-4</span>
              </div>
                <textarea class="form-control" name="klin4" aria-label="With textarea"><?php echo $return["Основное_поступК4"]; ?></textarea>
                <div class="input-group-prepend ml-1">
                  <span class="input-group-text">P-4</span>
                </div>
                  <textarea class="form-control" name="pat4" aria-label="With textarea"><?php echo $return["Основное_поступП4"]; ?></textarea>
          </div>
          <div class="input-group mt-1">
              <div class="input-group-prepend">
                <span class="input-group-text">K-5</span>
              </div>
                <textarea class="form-control" name="klin5" aria-label="With textarea"><?php echo $return["Основное_поступК5"]; ?></textarea>
                <div class="input-group-prepend ml-1">
                  <span class="input-group-text">P-5</span>
                </div>
                  <textarea class="form-control" name="pat5" aria-label="With textarea"><?php echo $return["Основное_поступП5"]; ?></textarea>
          </div>
          <p title="Если признак совпадает, то необходимо поставить галочку">Признак несовпадения:</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="entity" value="-1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Сущность
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="etiolog" value="-1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Этиология
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="location" value="-1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Локализация
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="error" value="-1" id="defaultCheck1">
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
