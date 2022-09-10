<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Majesty Developer</title>
  <link rel="stylesheet" href="/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
<header>
    <?php 
     echo require 'application/lib/header.php';
    ?>
    <div class="time"></div>
  </header>

  <nav>
    <ul class="content__links">

    </ul>
  </nav>

<section class="content container">
<div class="row justify-content-center">
        <div class="col-lg-4 text-center">
            <h3 class="mb-4">Вход</h3>
            <form action="/login/login  " method="POST" class="mb-4">
                <div class="form-group">
                    <input type="text" class="form-control tooltip-input" name="login" placeholder="Введите логин" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control tooltip-input" name="password" placeholder="Введите пароль">
                </div>
                <button class="btn btn-primary btn-block" type="submit" style="color: limegreen; background-color: black; border-color: limegreen;">Войти</button>
            </form>
            <a href="/login/signup" style="color: limegreen;">Зарегистрироваться</a>
            <div class='result-block'>
                <?php 
                    if (isset($errors )) {
                        if (count($errors) > 0) {
                            foreach ($errors as $key => $item) {
                                echo "<p class='result-block__item error'>$item</p>";
                            }
                        }
                    }
                    if (isset($login) && !$login) {
                        echo "<p class='result-block__item error'>Неверный логин или пароль</p>";
                    }
                ?>
            </div>
        </div>
    </div> 
</section>
  
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>