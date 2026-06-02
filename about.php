<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>О нас - Студия дизайна интерьеров</title>
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
    <h2>О нашей студии</h2>
    <div class="about-content">
        <p>Студия "ИнтерьерМастер" основана в 2020 году командой профессиональных дизайнеров и архитекторов.</p>
        <h3>Наша миссия</h3>
        <p>Создавать гармоничные и функциональные пространства, отражающие индивидуальность каждого клиента.</p>
        <h3>Наши ценности</h3>
        <ul>
            <li>Качество на всех этапах</li>
            <li>Внимание к деталям</li>
            <li>Прозрачное ценообразование</li>
            <li>Соблюдение сроков</li>
            <li>Индивидуальный подход к каждому проекту</li>
        </ul>
        <h3>Достижения</h3>
        <ul>
            <li>Более 150 реализованных проектов</li>
            <li>Победители конкурса "Лучший дизайн-проект 2024"</li>
            <li>Члены Ассоциации дизайнеров интерьера России</li>
            <li>Средняя оценка клиентов 4.9 из 5</li>
        </ul>
    </div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьеров "ИнтерьерМастер". Все права защищены.</p>
</footer>
</body>
</html>