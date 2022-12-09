<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reality Developer</title>
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
        <h2 class="mb-4">Блог</h2>
        <div class='posts-block'>
            <?php
            $i = 0;
            if (isset($posts) && count($posts) > 0) {
                foreach ($posts as $post) {
                    $post['image'] = '/' . $post['image'];
            ?>
                    <div class="card card-blog mb-4" style="color: limegreen; background-color: black; border-color: limegreen;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src=<?= $post['image'] ? $post['image'] : '/public/img/not-found.png' ?> class="card-img">
                            </div>
                            <div class="col-md-8 d-flex flex-column">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post['title'] ?></h5>
                                    <p class="card-text"><?= $post['text'] ?></p>
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

                            <?php if (isset($_SESSION['isUser'])) { ?>

                            <div class="card-comment__add">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="comment" data-id=<?= $post['id'] ?> placeholder="Введите ваш комментарий" aria-describedby="send-btn" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="send-btn" onClick="createScript(<?= $post['id'] ?>, 'Artiom')">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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
                    <a class="page-link" href="/blog/index/?page=<?= $current_page - 1 == 0 ? 1 : $current_page  - 1 ?>" style="color: limegreen; background-color: black; border-color: limegreen;">
                        Предыдущая
                    </a>
                </li>
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    if (!($i ==  $current_page)) {
                        echo '
                            <li class="page-item">
                                <a style="color: limegreen; background-color: black; border-color: limegreen;" class="page-link" href="/blog/index/?page=' . $i . '">' . $i . '</a>
                            </li>
                        ';
                    } else {
                        echo '
                            <li class="page-item active">
                                <a style="color: white; background-color: limegreen; border-color: limegreen;" class="page-link" href="/blog/index/?page=' . $i . '">' . $i . '</a>
                            </li>
                        ';
                    }
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="/blog/index/?page=<?= $current_page + 1 > $total_pages ? $total_pages : $current_page + 1 ?>" style="color: limegreen; background-color: black; border-color: limegreen;">
                        Следующая
                    </a>
                </li>
            </ul>
        </nav>
    </section>


</body>
<script src="/public/scripts/sendMessage.js"></script>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>