<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Карта сайта - Студия дизайна интерьеров</title>
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
    <h1>Карта сайта</h1>
    <div class="sitemap">
        <div class="sitemap-section">
            <h3>Основные страницы</h3>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="services.php">Услуги</a></li>
                <li><a href="portfolio.php">Портфолио</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
        </div>
        <div class="sitemap-section">
            <h3>Пользовательские страницы</h3>
            <ul>
                <li><a href="login.php">Вход в личный кабинет</a></li>
                <li><a href="register.php">Регистрация</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="profile.php">Личный кабинет</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="sitemap-section">
            <h3>Статьи</h3>
            <ul>
                <li>Модные тенденции 2026 года</li>
                <li>Как выбрать цветовую гамму для маленькой квартиры</li>
                <li>Зонирование пространства в студии</li>
                <li>Экодизайн: натуральные материалы</li>
                <li>Освещение в интерьере</li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьеров "ИнтерьерМастер". Все права защищены.</p>
</footer>
</body>
</html>