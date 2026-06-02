<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Портфолио - Студия дизайна интерьеров</title>
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
    <h2>Наши работы</h2>
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <h3>Квартира на Ленинском проспекте</h3>
            <p>Современный стиль. 85 м². Срок реализации: 3 месяца.</p>
        </div>
        <div class="portfolio-item">
            <h3>Загородный дом в Подмосковье</h3>
            <p>Классический стиль с современными элементами. 220 м².</p>
        </div>
        <div class="portfolio-item">
            <h3>Студия 35 м²</h3>
            <p>Минимализм с функциональной трансформацией пространства.</p>
        </div>
        <div class="portfolio-item">
            <h3>Лофт в центре Москвы</h3>
            <p>Индустриальный стиль с элементами ар-деко. 120 м².</p>
        </div>
        <div class="portfolio-item">
            <h3>Детская комната</h3>
            <p>Яркий и безопасный дизайн с учётом зонирования.</p>
        </div>
        <div class="portfolio-item">
            <h3>Ресторан "Уют"</h3>
            <p>Коммерческий интерьер в стиле эко. 300 м².</p>
        </div>
    </div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьеров "ИнтерьерМастер". Все права защищены.</p>
</footer>
</body>
</html>