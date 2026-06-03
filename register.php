<?php require 'config.php';

if (isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    if ($password !== $confirm_password) {
        $error = "Пароли не совпадают";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->fetch()) {
            $error = "Пользователь с таким именем или email уже существует";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, 'user')");
            $stmt->execute([$username, $email, $hashed_password]);
            $success = "Регистрация успешна! Теперь вы можете войти.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Студия дизайна интерьера</title>
    <link rel="stylesheet" href="<?= $css_file ?>">
</head>
<body>
<header>
    <h1>Студия дизайна интерьера "ИнтерьерАрт"</h1>
    <nav>
        <a href="index.php">Главная</a>
        <a href="about.php">О нас</a>
        <a href="services.php">Услуги</a>
        <a href="portfolio.php">Портфолио</a>
        <a href="contacts.php">Контакты</a>
        <a href="sitemap.php">Карта сайта</a>
        <a href="login.php">Вход</a>
        <a href="?blind=<?= $blind_mode ? 'off' : 'on' ?>"><?= $blind_mode ? 'Обычная версия' : 'Версия для слабовидящих' ?></a>
    </nav>
</header>
<div class="container" style="max-width: 500px;">
    <h2>Регистрация</h2>
    <?php if($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <?php if($success): ?>
        <p style="color: green;"><?= $success ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Имя пользователя" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <input type="password" name="password" placeholder="Пароль" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <input type="password" name="confirm_password" placeholder="Подтвердите пароль" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <button type="submit" class="btn" style="width: 100%;">Зарегистрироваться</button>
    </form>
    <p style="margin-top: 20px;">Уже есть аккаунт? <a href="login.php">Войдите</a></p>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьера "ИнтерьерАрт". Все права защищены.</p>
</footer>
</body>
</html>