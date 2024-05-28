<?php
// Параметры подключения к базе данных
$servername = ""; // Имя сервера базы данных
$username = "pma"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$dbname = "phpmyadmin"; // Имя базы данных (замените на ваше имя базы данных)

try {
    // Создание подключения с использованием PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Установка режима ошибок для PDO на исключения
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Вывод сообщения об успешном подключении
    echo "Connected successfully";
} catch(PDOException $e) {
    // Вывод сообщения об ошибке, если подключение не удалось
    echo "Connection failed: " . $e->getMessage();
}
