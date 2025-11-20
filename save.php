<?php
date_default_timezone_set("Europe/Kiev");

// Дата й час
$time = date("Y-m-d_H-i-s");

// Папка survey
$folder = "survey";
if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

// Формуємо дані
$data = [
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "question1" => $_POST["q1"],
    "question2" => $_POST["q2"],
    "question3" => $_POST["q3"],
    "submitted_at" => date("Y-m-d H:i:s")
];

// Створення JSON-файлу
$filename = $folder . "/survey_" . $time . ".json";
file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Виведення часу після надсилання
echo "<h2>Дякую! Ваш відгук отримано.</h2>";
echo "<p>Дата та час: <b>" . date("Y-m-d H:i:s") . "</b></p>";
?>