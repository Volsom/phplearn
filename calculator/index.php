<!DOCTYPE html>
<html lang="en, ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная 4</title>
    <link rel="stylesheet" href="main.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div class = "home">
            <div class="logo__wrapper"><img class="logo" src="/phplearn/img/5868.upto100x100.png" alt="Logo Polytech"></div>
            <a href="/phplearn">HOME</a>
        </div>
    </header>
    <main>
        <?php

        ?>
        <form action="" method="post">
            <input type="text" name="rezult" id="rezult" class="rezult" value="<?php
            if (!empty($_GET)) {
                $equation = $_POST['rezult'];
                echo $equation;
            };
            ?>">
            <input type="button" onclick="alerted1()" value="1" name="one">
            <input type="button" onclick="alerted2()" value="2" name="two">
            <input type="button" onclick="alerted3()" value="3" name="three">
            <input type="button" onclick="alerted4()" value="&#247;" name="divide">
            <input type="button" onclick="alerted5()" value="4" name="four">
            <input type="button" onclick="alerted6()" value="5" name="five">
            <input type="button" onclick="alerted7()" value="6" name="six">
            <input type="button" onclick="alerted8()" value="&#215;" name="multiply">
            <input type="button" onclick="alerted9()" value="7" name="seven">
            <input type="button" onclick="alerted10()" value="8" name="eight">
            <input type="button" onclick="alerted11()" value="9" name="nine">
            <input type="button" onclick="alerted12()" value="-" name="subtract">
            <input type="button" onclick="alerted13()" value="0" name="zero" class="zero">
            <input type="button" onclick="alerted16()" value="." name="dote">
            <input type="button" onclick="alerted15()" value="+" name="add">
            <input type="button" onclick="alerted17()" value="(" name="Obracket">
            <input type="button" onclick="alerted18()" value=")" name="Cbracket">
            <input type="button" onclick="alerted14()" value="C" name="reset">
            <input type="button" onclick="alerted19()" value="&#8676;" name="delete">
            <input type="submit" value="=" name="equal" class="equal">
        </form>
    </main>
    <footer>
        <p>Мослов Александр 231-323</p>
    </footer>
</body>
</html>