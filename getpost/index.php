<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST training</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="home">
            <div class="logo__wrapper"><img class="logo" src="/phplearn/img/5868.upto100x100.png" alt="Logo Polytech"></div>
            <a href="/phplearn">HOME</a>
        </div>
    </header>
    <main>
        <div class="container">
            <?php
            if (!empty($_POST["user_name"]) && !empty($_POST["age"])) {

                echo "<h1>Получены новые вводные:</h1>";
                echo "<p>Имя - ";
                echo $_POST["user_name"];
                echo "</p>";
                echo "<p>Возраст - ";
                echo $_POST["age"];
                echo " лет</p>";

                } else {

                    echo "Переменные не дошли. Проверьте все еще раз.";

                }
            ?>
            <div class="go">
                <a href="index.html">Вернуться на страницу с формой</a>
            </div>
        </div>
    </main>
    <footer>
        <p>Мослов Александр 231-323</p>
    </footer>
</body>

</html>