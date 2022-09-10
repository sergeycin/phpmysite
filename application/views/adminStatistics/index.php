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
            <h1 class="title">Majesty Developer</h1>
        </div>
        <div class="time"></div>
    </header>

    <nav>
        <ul class="content__links">

        </ul>
    </nav>

    <section class="content container">
    <h2 class="mb-4">Статистика</h2>
    <div class='statistics-block'>
        <table class="table table-sm table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Страница</th>
                    <th scope="col">IP</th>
                    <th scope="col">Host</th>
                    <th scope="col">Браузер</th>
                    <th scope="col">Дата</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                if (isset($statistics) && count($statistics) > 0) {
                    foreach ($statistics as $statistics_item) {
                        echo '
                            <tr style="color: limegreen; border-color: limegreen;">
                                <td>'.$statistics_item['page'].'</td>
                                <td>'.$statistics_item['ip'].'</td>
                                <td>'.$statistics_item['host'].'</td>
                                <td>'.$statistics_item['browser'].'</td>
                                <td>'.$statistics_item['date'].'</td>
                            </tr>
                        ';
                    }
                } else {
                    echo "<tr><td class='font-italic' colspan='5'>Статистики нет</td></tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
    <nav class="mt-3 <?= $total_pages == 0 ? 'd-none' : '' ?>">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a 
                    class="page-link" 
                    href="/adminStatistics/index/?page=<?= $current_page - 1 == 0 ? 1 : $current_page - 1?>"
                    style="color: limegreen; background-color: black; border-color: limegreen;"
                >
                    Предыдущая
                </a>
            </li>
            <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    if (!($i == $current_page)) {
                        echo '
                            <li class="page-item">
                                <a style="color: limegreen; background-color: black; border-color: limegreen;" class="page-link" href="/adminStatistics/index/?page='.$i.'">'.$i.'</a>
                            </li>
                        ';
                    } else {
                        echo '
                            <li class="page-item active">
                                <a style="color: white; background-color: limegreen; border-color: limegreen;" class="page-link" href="/adminStatistics/index/?page='.$i.'">'.$i.'</a>
                            </li>
                        ';
                    }
                }
            ?>
            <li class="page-item">
                <a 
                    class="page-link" 
                    href="/adminStatistics/index/?page=<?= $current_page + 1 > $total_pages ? $total_pages : $current_page + 1 ?>"
                    style="color: limegreen; background-color: black; border-color: limegreen;"
                >
                    Следующая
                </a>
            </li>
        </ul>
    </nav>
</section>


</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>