<?php
// Инициализация сессии
session_start();

// Подключение к базе данных (предполагается, что уже настроено)
include 'db_connection.php';

// Получение данных из формы
$message = $_POST['message'];
$hashtags = $_POST['hashtags'];

// Разделение хэштегов по запятым и удаление пробелов
$hashtags_array = array_map('trim', explode(',', $hashtags));

// Добавление сообщения в базу данных
$sql = "INSERT INTO SMS (#_id, User_id, channel_id, Description, Data) VALUES (:id, :user_id, :channel_id, :description, :data)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id' => null, // или значение по умолчанию
    'user_id' => $_SESSION['user_id'], // предполагается, что id пользователя хранится в сессии
    'channel_id' => $_SESSION['channel_id'], // предполагается, что id канала хранится в сессии
    'description' => $message,
    'data' => date('Y-m-d H:i:s') // или любые другие данные, которые вы хотите сохранить
]);

// Сохранение хэштегов в переменной сессии
if (!isset($_SESSION['hashtags'])) {
    $_SESSION['hashtags'] = array();
}
$_SESSION['hashtags'] = array_merge($_SESSION['hashtags'], $hashtags_array);

// Перенаправление на страницу с формой
header("Location: add_message_form.php");

// Подключение к базе данных
include 'db_connection.php';

// Проверка, что POST-запрос содержит необходимые данные
if(isset($_POST['message']) && isset($_POST['hashtags'])) {
    $message = $_POST['message'];
    $hashtags = $_POST['hashtags'];

    // Подготовка и выполнение запроса к базе данных с использованием PDO
    try {
        $stmt = $pdo->prepare("INSERT INTO SMS (Description, Data) VALUES (?, NOW())");
        $stmt->execute([$message]);
        
        // Получение ID последней вставленной записи
        $sms_id = $pdo->lastInsertId();

        // Пример использования данных hashtags для дальнейшей обработки
        foreach($hashtags as $tag) {
            // Работа с каждым хэштегом
        }

        echo "Message processed successfully!";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: Message or hashtags not provided!";
}
exit();