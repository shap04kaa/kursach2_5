<?php
require("connectdb.php");

// Получение всех данных из базы данных
$query = "SELECT id, latitude, longitude FROM parkings";
$result = $connect->query($query);

// Создание массивов для хранения данных
$points_id = [];
$points_lat = [];
$points_long = [];

while ($row = $result->fetch_assoc()) {
    $points_id[] = $row['id'];
    $points_lat[] = $row['latitude'];
    $points_long[] = $row['longitude'];
}
?>