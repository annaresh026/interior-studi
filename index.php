<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студия дизайна интерьеров - Главная</title>
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
    <div class="hero">
        <h2>Создаём интерьеры, в которых хочется жить</h2>
        <p>Превращаем ваши идеи в стильные и функциональные пространства</p>
        <a href="contacts.php" class="btn">Заказать проект</a>
    </div>
    
    <div class="features">
        <div class="feature-card">
            <h3>Индивидуальный подход</h3>
            <p>Учитываем все ваши пожелания и особенности помещения</p>
        </div>
        <div class="feature-card">
            <h3>3D-визуализация</h3>
            <p>Увидите результат ещё до начала ремонта</p>
        </div>
        <div class="feature-card">
            <h3>Авторский надзор</h3>
            <p>Контролируем реализацию проекта на всех этапах</p>
        </div>
    </div>
    
    <div class="articles">
        <h2>Статьи по дизайну интерьера</h2>
        <div class="article-list">
            <div class="article-item">
                <h3>Модные тенденции 2026 года в дизайне интерьеров</h3>
                <p>Натуральные материалы, экологичность и умные технологии становятся главными трендами этого года...</p>
            </div>
            <div class="article-item">
                <h3>Как выбрать цветовую гамму для маленькой квартиры</h3>
                <p>Светлые тона визуально расширяют пространство, а правильно расставленные акценты добавляют уюта...</p>
            </div>
            <div class="article-item">
                <h3>Зонирование пространства в студии</h3>
                <p>Стеллажи, разные уровни пола и освещение помогут разделить комнату на функциональные зоны...</p>
            </div>
            <div class="article-item">
                <h3>Экодизайн: натуральные материалы в интерьере</h3>
                <p>Дерево, камень, пробка и бамбук создают здоровую атмосферу в доме...</p>
            </div>
            <div class="article-item">
                <h3>Освещение в интерьере: основные правила</h3>
                <p>Три уровня освещения - общее, рабочее и акцентное - создают комфортное пространство...</p>
            </div>
        </div>
    </div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьеров "ИнтерьерМастер". Все права защищены.</p>
</footer>
</body>
</html>