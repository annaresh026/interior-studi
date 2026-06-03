<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена - 404</title>
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
    </nav>
</header>
<div class="container" style="text-align: center; padding: 100px 20px;">
    <h1 style="font-size: 72px; color: #3b5e3b;">404</h1>
    <h2>Страница не найдена</h2>
    <p>К сожалению, запрашиваемая страница не существует или была перемещена.</p>
    <a href="index.php" class="btn" style="display: inline-block; margin-top: 20px;">Вернуться на главную</a>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьера "ИнтерьерАрт". Все права защищены.</p>
</footer>
</body>
</html>