<?php
session_start();

// Подключение к базе данных
$host = 'sql307.infinityfree.com';
$dbname = 'if0_42077542_interier';
$username = 'if0_42077542';
$password = 'N75DbcZaFT1WAF';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}

// Переключение режима для слабовидящих
if(isset($_GET['blind'])) {
    $_SESSION['blind_mode'] = $_GET['blind'] === 'on';
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

$blind_mode = $_SESSION['blind_mode'] ?? false;
$css_file = $blind_mode ? 'blind.css' : 'style.css';
?>