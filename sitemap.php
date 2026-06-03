<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта сайта - Студия дизайна интерьера</title>
    <link rel="stylesheet" href="<?= $css_file ?>">
</head>
<style>
    .sitemap-intro {
        text-align: center;
        margin-bottom: 40px;
        color: #555;
    }

    .sitemap-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }

    .sitemap-section {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid #2c5e2c;
    }

    .sitemap-section h3 {
        margin: 0 0 15px 0;
        color: #2c5e2c;
        font-size: 18px;
    }

    .sitemap-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sitemap-section li {
        margin-bottom: 10px;
        padding-left: 20px;
        position: relative;
    }

    .sitemap-section li:before {
        content: "→";
        position: absolute;
        left: 0;
        color: #2c5e2c;
    }

    .sitemap-section a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s;
    }

    .sitemap-section a:hover {
        color: #2c5e2c;
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .sitemap-grid {
            grid-template-columns: 1fr;
        }

        .sitemap-section {
            padding: 15px;
        }
    }
</style>
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
                <li><a href="article.php?id=1">Модные тенденции 2026 года в дизайне интерьеров</a></li>
                <li><a href="article.php?id=2">Как выбрать цветовую гамму для маленькой квартиры</a></li>
                <li><a href="article.php?id=3">Зонирование пространства в студии</a></li>
                <li><a href="article.php?id=4">Экодизайн: натуральные материалы в интерьере</a></li>
                <li><a href="article.php?id=5">Освещение в интерьере: основные правила</a></li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьера "ИнтерьерАрт". Все права защищены.</p>
</footer>
</body>
</html>