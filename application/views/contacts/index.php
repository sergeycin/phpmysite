<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Reality developer</title>
  <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
  <header>
    <div class="title-block">
    <a href="/"> <h1 class="title">About Reality developer</h1></a>
    </div>
    <div class="time"></div>
  </header>

  <nav>
    <ul class="content__links">

    </ul>
  </nav>

<form action="/contacts/check" method = "post">
  <div class="content-wrapper">
    <div class="container contact">
      <div class="contact__left">
        <div class="helper">Требуется ввести ваше ФИО, возраст и дату рождения</div>
        <label for="">
          <h3>ФИО
            <div class="warning fio"></div>
          </h3>
          <input id='FIO' class="input" type="text" name = "FIO">
          <hr>
        </label>

        <label for="">
          <h3>Возраст</h3>
          <input id='age' class="input" type="number" name = "age">
          <hr>
        </label>


        <div class="calendar">
          <div class="month">
            <ul>
              <li class="prev">&#10094;</li>
              <li><br>
                <div class="monthCol">

                </div>
                <span class="year" style="font-size:18px">

                </span>
              </li>
              <li class="next">&#10095;</li>
             
            </ul>
          </div>

          <ul class="days">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
          </ul>
        </div>
      </div>

      <div class="contact__right" action = "test/check">
        <div class="helper">Требуется ввести ваш пол, email и телефон</div>

        <h3>Пол</h3>
        <label class="age" for="">
          <label class="age__container">Муж
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
          </label>

          <label class="age__container">Жен
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
          </label>
        </label>

        <label for="">
          <h3>Email
            <div class="warning email"></div>
          </h3>
          <input id='Email' class="input" type="text" name = "Email">
          <hr>
        </label>

        <label for="">
          <h3>Телефон
            <div class="warning phone"></div>
          </h3>
          <input id='Phone' class="input" type="text" name = "Phone">
          <hr>
        </label>

        <div class="contact__buttons">
          <button type="submit" id="send" class="contact__button yellow">Отправить</button>
          <button type="reset" id='clear' class="contact__button red">Очистить форму</button>
        </div>
      </div>
    </div>

    
  </div>
</form>

<div class='result-block'>
        <?php 
            if (isset($errors)) {
                if (count($errors) > 0) {
                    foreach ($errors as $key => $item) {
                        echo "<p class='result-block__item error'>$item</p>";
                    }
                } else {
                    echo "<p class='result-block__item success'>Форма была отправлена</p>";
                }
            }
        ?>
    </div>

  
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>