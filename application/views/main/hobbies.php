<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty Developer</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <header>
        <div class="title-block">
            <h1 class="title">About Realyti Developer</h1>
        </div>
        <div class="time"></div>
    </header>


    <nav>
        <ul class="content__links">

        </ul>
    </nav>

    <div class="content-wrapper">
        <div class="content hobbies">
            <h1>General</h1>
            <ul class="ul_anchor">
<!--                 <a href="#favourite">Favourite things</a>
                <a href="#books">My favourite books</a>
                <a href="#music">My favourite music</a>
                <a href="#films">My favourite films</a>
                <a href="#games">My favourite games</a> -->
            </ul>
            <iframe style="margin: 0 auto;" width="100%" height="515" src="https://www.youtube.com/embed/LembwKDo1Dk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php

            foreach ($data as $row) {
                echo '
                <h2 id='.$row['id'].'>'.$row['title'].'</h2>
                <div class="container-hobbies">
                    <div  class="container-pop">
                        <img src="/public/images/'.$row['picture'].'" class="img__popover" alt="">
                    </div>
                    <p>'.$row['desc'].'</p>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>
</html>