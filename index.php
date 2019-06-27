<?php session_start();
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS\master.css">
    <title>Welcome, to Don de los muertos</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dd7a2545f2.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">SMD</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-success mr-1" data-toggle="modal" data-target="#exampleModal">
          Вход
          </button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="window.location = 'registr.php';">Регистрация</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вход:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="checkUser_contrl.php" method="post">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Login</label>
                      <input type="text" name="login" class="form-control" id="inputEmail4" placeholder="Login">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-secondary">Подтвердить</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div>
      </div>
</nav>
          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="main_cont">
          <h1>Добро пожаловать в "Don de los muertos"</h1>
    <hr>
    <p>
      Для продолжения работы с системой, пожалуйста, зарегестрируйтесь: <a href="registr.php">Регистрация</a> или войдите в вашу учётную запись: <a href="#">Вход</a>
    </p>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<script src="JS\external.js"></script>
          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
</body>
</html>
