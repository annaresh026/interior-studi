<?php require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $old_password = $_POST['old_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    if (password_verify($old_password, $user['password'])) {
        if ($new_password === $confirm_password) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmt->execute([$hashed_password, $user_id]);
            $message = "Пароль успешно изменён!";
        } else {
            $message = "Новые пароли не совпадают";
        }
    } else {
        $message = "Неверный текущий пароль";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет - Студия дизайна интерьеров</title>
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
        <a href="logout.php">Выйти</a>
        <a href="?blind=<?= $blind_mode ? 'off' : 'on' ?>"><?= $blind_mode ? 'Обычная версия' : 'Версия для слабовидящих' ?></a>
    </nav>
</header>
<div class="container" style="max-width: 600px;">
    <h2>Личный кабинет</h2>
    <p>Добро пожаловать, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>!</p>
    <p>Роль: <?= $_SESSION['role'] ?></p>
    
    <?php if($message): ?>
        <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>
    
    <h3>Смена пароля</h3>
    <form method="POST">
        <input type="password" name="old_password" placeholder="Текущий пароль" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <input type="password" name="new_password" placeholder="Новый пароль" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <input type="password" name="confirm_password" placeholder="Подтвердите новый пароль" required style="width: 100%; padding: 10px; margin-bottom: 15px;">
        <button type="submit" name="change_password" class="btn" style="width: 100%;">Изменить пароль</button>
    </form>
    
    <?php if($_SESSION['role'] === 'admin'): ?>
        <h3 style="margin-top: 30px;">Управление пользователями (Админ)</h3>
        <?php
        $stmt = $pdo->query("SELECT id, username, email, role FROM users");
        $users = $stmt->fetchAll();
        ?>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #2c5e2c; color: white;">
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">Имя</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">Роль</th>
            </tr>
            <?php foreach($users as $u): ?>
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px;"><?= $u['id'] ?></td>
                <td style="padding: 10px;"><?= htmlspecialchars($u['username']) ?></td>
                <td style="padding: 10px;"><?= htmlspecialchars($u['email']) ?></td>
                <td style="padding: 10px;"><?= $u['role'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьеров "ИнтерьерМастер". Все права защищены.</p>
</footer>
</body>
</html>