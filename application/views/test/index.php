<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty Developer</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="question">
        <div class="question__value">Вы точно хотите это сделать?</div>
        <div class="question__buttons">
            <div class="question__left"> Да</div>
            <div class="question__right"> Нет</div>
        </div>
    </div>
    <div class="background-question">
    </div>
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

    <form class="text-white test", action = "/test/check", method = "POST">

        <fieldset class="mb-3">
            <label class="form-label" for="">Name Second Name</label>
            <input class="form-control" name="fullName" type="text" placeholder="Enter your FIO" >
        </fieldset>

        <fieldset class="mb-3">
            <label for="" class="form-label">Group</label>
            <select class="form-select" name="group" id="">
                <option value="none" disabled selected>Choose your group</option>
                <optgroup label="First course">
                    <option value="10">First group</option>
                    <option value="11">Second group</option>
                    <option value="12">Third group</option>
                </optgroup>
                <optgroup label="Second course">
                    <option value="20">First group</option>
                    <option value="21">Second group</option>
                    <option value="22">Third group</option>
                </optgroup>
            </select>
        </fieldset>

        <h4 class="my-4">Questions</h4>
        <fieldset class="mb-5  rounded-3 p-5">
            <label for="" class="form-label">Question №1</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae atque culpa unde, velit aut quidem
                distinctio fugit repellat aspernatur porro modi quibusdam incidunt nobis perspiciatis. Pariatur,
                eveniet! Incidunt, consequuntur eum?</p>
            <input name="task1" type="text" class="form-control" id="Test_input" placeholder="Ответ на вопрос №1"
                required>
        </fieldset>

        <fieldset class="mb-5  rounded-3 p-5">
            <label for="" class="form-label">Question №2</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae atque culpa unde, velit aut quidem
                distinctio fugit repellat aspernatur porro modi quibusdam incidunt nobis perspiciatis. Pariatur,
                eveniet! Incidunt, consequuntur eum?</p>
            <div class="d-flex flex-column gap-2">
                <div>
                    <input type="radio" name="task2" class="form-check-input" value="answer 1">
                    <label for="" class="form-check-inline">Answer 1</label>
                </div>
                <div>
                    <input type="radio" name="task2" class="form-check-input" value="answer 2">
                    <label for="" class="form-check-inline">Answer 2</label>
                </div>
                <div>
                    <input type="radio" name="task2" class="form-check-input" value="answer 3">
                    <label for="" class="form-check-inline">Answer 3</label>
                </div>
                <div>
                    <input type="radio" name="task2" class="form-check-input" value="answer 4>
                    <label for="" class="form-check-inline">Answer 4</label>
                </div>
            </div>
        </fieldset>

        <fieldset class="mb-5 rounded-3 p-5">
            <label for="" class="form-label">Question №3</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae atque culpa unde, velit aut quidem
                distinctio fugit repellat aspernatur porro modi quibusdam incidunt nobis perspiciatis. Pariatur,
                eveniet! Incidunt, consequuntur eum?</p>
            <select name="task3" id="" class="form-select" required>
                <option value="" disabled selected>Choose your answer</option>
                <optgroup label="Group 1">
                    <option value="answer 1">Answer 1</option>
                    <option value="answer 2">Answer 2</option>
                </optgroup>
                <optgroup label="Group 2">
                    <option value="answer 3">Answer 3</option>
                    <option value="answer 4">Answer 4</option>
                </optgroup>
            </select>
        </fieldset>

        <fieldset class="d-flex justify-content-end flex-wrap gap-3 mb-5">
            <button id="send_type" class="btn btn-primary">Send</button>
            <button class="btn btn-outline-danger">Clear</button>
        </fieldset>

        <div class='result-block'>
        <?php 
            if (isset($errors)) {
                foreach ($errors as $key => $item) {
                    echo "<p class='result-block__item error'>$item</p>";
                }
            } elseif (isset($result)) {
                echo "<p style='color: transparent;'>Вы ответили верно на $result из 3 вопросов!</p>";
                if ($result < 2) {
                    echo '<p>Failure,.</p>';
                    echo "<img src='https://media.istockphoto.com/vectors/fail-ink-stamp-vector-id951985126?k=20&m=951985126&s=612x612&w=0&h=vq_zrYB1EdKILKuO3wMW5e9M4VdGFLSJPGXe4dp84k4=' alt='Картинка неприемлемо' style='width: 500px;'>";
                } else {
                    echo '<p>Success, .</p>';
                    echo "<img src='https://cdn.xxl.thumbs.canstockphoto.com/ok-3d-people-man-person-with-a-huge-tick-and-thumb-up-drawings_csp15025439.jpg' alt='Картинка приемлемо' style='width: 500px;'>";
                }
            }
        ?>
    </div>

    </form>
    </main>
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>