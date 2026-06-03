<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты - Студия дизайна интерьера</title>
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
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="profile.php">Личный кабинет</a>
            <a href="logout.php">Выйти</a>
        <?php else: ?>
            <a href="login.php">Войти</a>
            <a href="register.php">Регистрация</a>
        <?php endif; ?>
        <a href="?blind=<?= $blind_mode ? 'off' : 'on' ?>" class="btn-blind">
            <?= $blind_mode ? '☀️ Обычная версия' : '🌙 Версия для слабовидящих' ?>
        </a>
    </nav>
</header>
<div class="container">
    <h2>Свяжитесь с нами</h2>
    <div class="contacts-grid">
        <div class="contact-info">
            <h3>Адрес</h3>
            <p>г. Москва, ул. Тверская, д. 15, офис 305</p>
            
            <h3>Телефон</h3>
            <p>+7 (495) 123-45-67</p>
            
            <h3>Email</h3>
            <p>info@interiorart.ru</p>
            
            <h3>Режим работы</h3>
            <p>Пн-Пт: 10:00 - 20:00<br>Сб: 11:00 - 18:00<br>Вс: выходной</p>
        </div>
        <div class="contact-form">
            <h3>Напишите нам</h3>
            <form action="send_message.php" method="POST">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="email" name="email" placeholder="Ваш Email" required>
                <input type="tel" name="phone" placeholder="Телефон">
                <textarea name="message" placeholder="Сообщение" rows="5" required></textarea>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьера "ИнтерьерАрт". Все права защищены.</p>
</footer>
</body>
</html>