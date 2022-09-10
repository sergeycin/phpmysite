<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty Developer</title>
    <link rel="stylesheet" href="/public/css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <div class="photo__open">
        <div class="buttons__open">
            <div class="button__prev">
                <span class="material-icons">
                    arrow_back_ios
                </span>
            </div>
            <div class="button__next">
                <span class="material-icons">
                    arrow_forward_ios
                </span>
            </div>
        </div>
    </div>
    <div class="photo__background"></div>
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

    <div class="content-wrapper">
        <div class="content img">
            <?php
            foreach($photos as $key => $value) {
            ?>
            <div class="container_img">
                <img src=<?=$value?> title = <?=$key?>>
                <div class="img_title"><?=$key?></div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>