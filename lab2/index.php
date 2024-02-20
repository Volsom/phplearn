<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная 2</title>
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
            display: flex;
            justify-content: center;
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
        input, textarea, button {
            color: blueviolet;
            font-size: 12px;
            font-weight: 900;
            border-radius: 4px;
        }
        form {
            font-size: 12px;
            font-weight: 900;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <header>
        <div class = "home">
            <div class="logo__wrapper"><img class="logo" src="/phplearn/img/5868.upto100x100.png" alt="Logo Polytech"></div>
            <a href="/phplearn">HOME</a>
        </div>
    </header>
    <main>
    <form action="index.php" method="post">
        <label for="equation">Уравнение:</label>
        <input name="equation" id="equation" type="text">
        <button type="submit">Submit</button>
    </form>
        <?php
            // 27 - x = 17
            $equation = $_POST['equation'];
            print('<p>'.$equation.'</p>');
            $arr = explode(' ', $equation);
            $line = print_r($arr, 1);
            print('<p>'.$line.'</p>');
            $counter = count($arr);
            $sep = array_search('X', $arr);
            $arr1 = array_slice($arr, $sep+1);
            $c1 = count($arr1);
            $arr2 = array_slice($arr, 0, $sep);
            $c2 = count($arr2);
            $line2 = print_r($arr1, 1);
            $line3 = print_r($arr2, 1);
            print('<p>'.$line2.'</p>');
            print('<p>'.$line3.'</p>');
            $eq = '';
            switch(true)
            {
                case $c2 > $c1:
                    for($i=0; $i < $c2; $i++)
                    {
                        switch($arr2[$i])
                        {
                            case '+': 
                                $eq .= '- ';
                                break;
                            case '-': 
                                $eq .= '+ ';
                                break;
                            case '*': 
                                $eq .= '/ ';
                                break;
                            case '/': 
                                $eq .= '* ';
                                break;
                            case '=':
                                $eq .= '= ';
                                break;
                            default: 
                                $eq .= $arr2[$i].' ';
                                break;
                        }
                    }
                    $eq = implode(' ', $arr1).' '.$eq;
                    break;
                case $c1 > $c2:
                    for($j=0; $j < $c1; $j++)
                    {
                        switch($arr1[$j])
                        {
                            case '+': 
                                $eq .= '- ';
                                break;
                            case '-': 
                                $eq .= '+ ';
                                break;
                            case '*':
                                $eq .= '/ ';
                                break;
                            case '/':
                                $eq .= '* ';
                                break;
                            case '=':
                                $eq .= '= ';
                                break;
                            default: 
                                $eq .= $arr1[$j].' ';
                                break;
                        }
                    }
                    $eq = implode(' ', $arr2).' '.$eq;
                    break;
                    default:
                        $eq .= 'X ';
            }
            echo '<p>'.$eq.'</p>'; 
        ?>
    </main>
    <footer>
        <p>Мослов Александр 231-323</p>
    </footer>
</body>
</html>