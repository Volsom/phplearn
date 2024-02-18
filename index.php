<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика</title>
</head>
<body>
    <style>
        .logo {
            width: 64px;
            height: 64px;
        }
        footer {
            position: fixed;
            bottom: 0;
        }
    </style>
    <header>
        <img class="logo" src="/phplearn/img/5868.upto100x100.png" alt="Logo Polytech">
    </header>
    <main>
        <?php
            echo '<h1>Hello, world!</h1>';
            $url = 'http://www.example.com';
            print_r(get_headers($url));
        ?>
    </main>
    <footer>
        <p>Мослов Александр 231-323</p>
    </footer>
</body>
</html>