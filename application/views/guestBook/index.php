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
    <form action="/guestBook/create" method="POST">
        <div class="form-group">
            <input type="text" class="form-control tooltip-input" name="fullName" title="Фамилия Имя Отчество" placeholder="Введите ваше ФИО" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control tooltip-input" name="Email" title="Пример: ivanov@gmail.com" placeholder="Введите email" autocomplete="off">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="review" rows="4" placeholder="Введите отзыв"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Отправить</button>
    </form>
    <div class='result-block'>
        <?php 
            if (isset($errors)) {
                if (count($errors) > 0) {
                    echo "<span style='color: red;'>Произошла ошибка! Отзыв не получилось отправить. Скорее всего, <strike>беды с башкой</strike>  проблемы с бд</span>";
                } else {
                    echo "<p class='result-block__item success'>Отзыв был отправлен</p>";
                }
            }
        ?>
    </div>
    <div class='reviews-block'>
        <h5 class='mb-3'>Отзывы:</h5>
        <?php 
            if (isset($reviews) && count($reviews) > 0) {
                function cmp($a, $b) 
                {
                    if (isset($a[2]) && isset($b[2])) {
                        if ($a[2] == $b[2]) {
                            return 0;
                        }
                        return (strtotime($a[2]) > strtotime($b[2])) ? -1 : 1;
                    }
                }

                 usort($reviews, "cmp");
                foreach ($reviews as $review) {
                    if (isset($review[0]) && isset($review[2]) && isset($review[3]))
                    echo "
                        <div class='reviews-block__item'>
                            <div class='reviews__header'>
                                <b>$review[0]</b>, <i>$review[2]</i>
                            </div>
                            <div class='reviews__content'>$review[3]</div>
                        </div>
                    ";
                }
            } else {
                echo "<div class='font-italic'>Отзывов нет</div>";
            }
        ?>
    </div>
</section>

  
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>