<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная 1</title>
</head>
<body>
    <style>
        html {
            width: 100%;
            height: 100%;
            font-family: monospace;
        }
        .logo {
            display: block;
            object-fit: contain;
            object-position: left;
            width: 100%;
            height: 100%;
        }
        header {
            display: flex;
            align-items: center;
            background-color: darkgray;
            height: 84px;
            justify-content: space-between;
            padding-left: 10px;
            padding-right: 40px;
        }
        .logo__wrapper {
            width: 64px;
            height: 64px;
            background-color: unset;
        }
        footer {
            display: flex;
            align-items: center;
            background-color:darkgray;
            color: black;
            font-weight: 700;
            height: 80px;
        }
        body {
            background-color: lightslategrey;
            margin: 0;
            width: 100%;
            height: 100%;
            min-height: 100%;
            display: grid;
            grid-template-rows: auto 1fr auto;
        }
        h1 {
            margin: 0;
            padding: 10px;
        }
        p {
            padding-left: 10px;
            margin: 0;
        }
        a {
            text-decoration: none;
            color: black;
            position: relative;
            font-size: 16px;
            font-weight: 700;
        }
        a::after {
            position: absolute;
            content: '';
            left: 0;
            bottom: -10px;
            display: block;
            width: 100%;
            height: 3px;
            background: black;
            color: black;
            background-color: black;
        }
        a::after {
            width: 0;
            transition: 0.3s;
        }
        a:hover:after {
            width: 100%;
        }
        .home {
            display: flex;
            align-items: center;
        }
    </style>
    <header>
        <div class = "home">
            <div class="logo__wrapper"><img class="logo" src="/phplearn/img/5868.upto100x100.png" alt="Logo Polytech"></div>
            <a href="/phplearn/">HOME</a>
        </div>
    </header>
    <main>
        <?php
            echo '<h1>Hello, world!</h1>';
        ?>
    </main>
    <footer>
        <p>Мослов Александр 231-323</p>
    </footer>
</body>
</html>