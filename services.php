<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги - Студия дизайна интерьера</title>
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
    <h2>Наши услуги</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Консультация дизайнера</h3>
            <p>Первичная консультация, обсуждение концепции, выезд на объект.</p>
            <p class="price">Бесплатно</p>
        </div>
        <div class="service-card">
            <h3>Дизайн-проект квартиры</h3>
            <p>Планировка, расстановка мебели, цветовые решения, 3D-визуализация.</p>
            <p class="price">от 3000 ₽/м²</p>
        </div>
        <div class="service-card">
            <h3>Дизайн-проект дома</h3>
            <p>Полный проект с учётом инженерных систем и архитектурных особенностей.</p>
            <p class="price">от 3500 ₽/м²</p>
        </div>
        <div class="service-card">
            <h3>3D-визуализация</h3>
            <p>Реалистичная 3D-визуализация вашего будущего интерьера.</p>
            <p class="price">от 5000 ₽ за комнату</p>
        </div>
        <div class="service-card">
            <h3>Авторский надзор</h3>
            <p>Контроль реализации проекта, выезды на объект, проверка работ.</p>
            <p class="price">от 50 000 ₽/мес</p>
        </div>
        <div class="service-card">
            <h3>Комплектация</h3>
            <p>Подбор мебели, отделочных материалов, освещения и декора.</p>
            <p class="price">от 30 000 ₽</p>
        </div>
    </div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьера "ИнтерьерАрт". Все права защищены.</p>
</footer>
</body>
</html>