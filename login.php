<?php require 'config.php';

if (isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header("Location: profile.php");
        exit;
    } else {
        $error = "Неверное имя пользователя или пароль";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход - Студия дизайна интерьеров</title>
    <link rel="stylesheet" href="<?= $css_file ?>">
</head>
<body>
<header>
    <h1>Студия дизайна интерьеров "ИнтерьерМастер"</h1>
    <nav>
        <a href="index.php">Главная</a>
        <a href="about.php">О нас</a>
        <a href="services.php">Услуги</a>
        <a href="portfolio.php">Портфолио</a>
        <a href="contacts.php">Контакты</a>
        <a href="sitemap.php">Карта сайта</a>
        <a href="register.php">Регистрация</a>
        <a href="?blind=<?= $blind_mode ? 'off' : 'on' ?>"><?= $blind_mode ? 'Обычная версия' : 'Версия для слабовидящих' ?></a>
    </nav>
</header>
<div class="container" style="max-width: 500px;">
    <h2>Вход в личный кабинет</h2>
    <?php if($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Имя пользователя" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <input type="password" name="password" placeholder="Пароль" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <button type="submit" class="btn" style="width: 100%;">Войти</button>
    </form>
    <p style="margin-top: 20px;">Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a></p>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьеров "ИнтерьерМастер". Все права защищены.</p>
</footer>
</body>
</html>