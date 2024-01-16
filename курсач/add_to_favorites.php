<?php
require("session.php");
require("connectdb.php");

// Проверка, что пользователь авторизован
if (!$session_user) {
    // Возвращаем ошибку, если пользователь не авторизован
    echo "Ошибка: Пользователь не авторизован";
    exit();
}

// Проверка наличия переданных данных
$parkingId = isset($_POST['parkingId']) ? $_POST['parkingId'] : null;

$userId = $_SESSION["id"];

// SQL-запрос для добавления записи в таблицу users_parkings
mysqli_query($connect, "INSERT INTO users_parkings (user_id, park_id) VALUES (\"".$userId."\", \"".$parkingId."\")");

// Возвращаемся на сохраненную позицию после обновления
echo '<script>window.location.href = "allparks.php#parkingTable";</script>';
?>
