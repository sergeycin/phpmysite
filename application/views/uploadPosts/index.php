<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Majesty Developer: (not autorized) </title>


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
    <h2 class="mb-4">Загрузка постов для блога</h2>
    <form action="/admin/uploadposts/create" method="POST" enctype="multipart/form-data">
        <div class="input-group">
            <div class="custom-file">
                <input type="file" name="file" accept=".csv" class="form-control" id="uploadInput" aria-describedby="uploadInputBtn">
                <label class="custom-file-label" for="uploadInput">Загрузите посты для блога</label>
            </div>
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit" id="uploadInputBtn" style="color: limegreen; background-color: black; border-color: limegreen;">Загрузить посты</button>
            </div>
        </div>
    </form>
    <div class='result-block'>
        <?php 
            if (isset($empty)) {
                echo "<p class='result-block__item error'>Загрузите файл</p>";
            } elseif (isset($result)) {
                echo "<p class='result-block__item success'>Файл был отправлен</p>";
            } elseif (isset($error)) {
                echo "<p class='result-block__item error'>Произошла ошибка</p>";
            }
        ?>
    </div>
    <script>
        const inputFile = document.getElementById("uploadInput");
        const inputLabel = document.getElementsByClassName("custom-file-label")[0];
        inputFile.addEventListener("change", e => {
            inputLabel.innerHTML = e.target.files[0].name;
        });
    </script>
</section>
  
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>