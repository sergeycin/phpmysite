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
    <div class="title-block">
      <h1 class="title">About Realyti Developer</h1>
    </div>
    <div class="time"></div>
  </header>

  <nav>
    <ul class="content__links">

    </ul>
  </nav>
  <section class="content container">
    <h2 class="mb-4">Редактор блога</h2>
    <form action="/editBlog/add" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control tooltip-input" name="title" placeholder="Тема сообщения" autocomplete="off">
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" name="file" accept=".png, .jpeg, .jpg" class="form-control" id="uploadInput" aria-describedby="uploadInputBtn">
                <label class="custom-file-label" for="uploadInput">Загрузите изображение</label>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="4" placeholder="Введите сообщение"></textarea>
        </div>
        <button class="btn btn-primary" type="submit" style="color: limegreen; background-color: black; border-color: limegreen;">Добавить</button>
    </form>

    <div class='result-block mb-4'>
        <?php 
            if (isset($errors)) {
                if (count($errors) > 0) {
                    foreach ($errors as $key => $item) {
                        echo "<p class='result-block__item error'>$item</p>";
                    }
                } else {
                    echo "<p class='result-block__item success'>Тема успешно была создана</p>";
                }
            }
        ?>
    </div>

    <div class='posts-block'>
        <h5 class='mb-3'>Темы:</h5>
        <?php 
            $i = 0;
            if (isset($posts) && count($posts) > 0) {
                foreach ($posts as $post) {
        ?>
                    <div class="card card-blog mb-4" style="color: limegreen; background-color: black; border-color: limegreen;">
                        <div class="row no-gutters">

                            <div class="col-md-8 d-flex flex-column">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post['title'] ?></h5>
                                    <p class="card-text"><?= $post['text'] ?></p>
                                    <button 
                                        class="btn edit-btn"
                                        type="button"
                                        data-id='<?= $post['id'] ?>'
                                        data-title='<?= $post['title'] ?>'
                                        data-message='<?= $post['text'] ?>'
                                    >
                                        <img src=/public/images/edit.png />
                                    </button>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?= $post['date'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="card-comment">
                            <h6 class="card-comment__title">
                                <?= count($comments[$i]) ?> Комментариев
                            </h6>   
                            <div class="card-comment__container">
        <?php
                            foreach ($comments[$i] as $comment) {
        ?>
                                <div class="comment-item">
                                    <div class="d-flex">
                                        <div class="comment-item__name"><?= $comment['fullname'] ?>,</div>
                                        <div class="comment-item__date"><?= $comment['date'] ?></div>
                                    </div>
                                    <div class="comment-item__text"><?= $comment['comment'] ?></div>
                                </div>
        <?php
                            }
        ?>
                            </div>
                        </div>
                    </div>
        <?php
                    $i += 1;
                }
            } else {
                echo "<div class='font-italic'>Тем нет</div>";
            }
        ?>
    </div>

    <nav class="mt-3 <?= $total_pages == 0 ? 'd-none' : '' ?>">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a 
                    class="page-link" 
                    href="/editBlog/index/?page=<?= $current_page - 1 == 0 ? 1 : $current_page - 1?>"
                    style="color: limegreen; background-color: black; border-color: limegreen;"
                >
                    Предыдущая
                </a>
            </li>
            <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    if (!($i == $current_page )) {
                        echo '
                            <li class="page-item">
                                <a style="color: limegreen; background-color: black; border-color: limegreen;" class="page-link" href="/editBlog/index/?page='.$i.'">'.$i.'</a>
                            </li>
                        ';
                    } else {
                        echo '
                            <li class="page-item active">
                                <a style="color: white; background-color: limegreen; border-color: limegreen;" class="page-link" href="/editBlog/index/?page='.$i.'">'.$i.'</a>
                            </li>
                        ';
                    }
                }
            ?>
            <li class="page-item">
                <a 
                    class="page-link" 
                    href="/editBlog/index/?page=<?= $current_page + 1 > $total_pages ? $total_pages : $current_page + 1 ?>"
                    style="color: limegreen; background-color: black; border-color: limegreen;"
                >
                    Следующая
                </a>
            </li>
        </ul>
    </nav>

    <div class="modal hidden" >
        <div class="container">
            <div class="body" style="color: limegreen; background-color: black; border-color: limegreen; border: solid 1px;">
                <h4 class="text-center mb-4">Редактирование</h4>
                <form>
                    <div class="form-group">
                        <input id="editTitle" type="text" class="form-control tooltip-input" placeholder="Тема сообщения" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea id="editMessage" class="form-control" rows="4" placeholder="Введите сообщение"></textarea>
                    </div>
                    <button id="saveBtn" class="btn btn-primary w-100" type="button" style="color: limegreen; background-color: black; border-color: limegreen;">Сохранить</button>
                </form>
                <div id="modalErrorBlock" class="mt-3"></div>
            </div>
        </div>
    </div>

    <script>
        const inputFile = document.getElementById("uploadInput");
        const inputLabel = document.getElementsByClassName("custom-file-label")[0];
        inputFile.addEventListener("change", e => {
            inputLabel.innerHTML = e.target.files[0].name;
        });
    </script>
     <script src="/public/js/editBlog.js"></script>
</section>
  
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>