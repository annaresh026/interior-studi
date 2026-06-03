<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студия дизайна интерьера - Главная</title>
    <link rel="stylesheet" href="<?= $css_file ?>">
</head>
<style>
    .article-item {
        display: flex !important;
        flex-direction: row !important;
        gap: 20px !important;
        margin-bottom: 30px !important;
        background: white !important;
        border-radius: 10px !important;
        overflow: hidden !important;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1) !important;
    }
    .article-thumb {
        width: 200px !important;
        min-width: 200px !important;
        max-width: 200px !important;
        height: 150px !important;
        overflow: hidden !important;
    }
    .article-thumb img {
        width: 200px !important;
        height: 150px !important;
        object-fit: cover !important;
        display: block !important;
    }
    .article-info {
        padding: 15px 20px 15px 0 !important;
        flex: 1 !important;
    }
    @media (max-width: 768px) {
        .article-item {
            flex-direction: column !important;
        }
        .article-thumb {
            width: 100% !important;
            min-width: 100% !important;
            max-width: 100% !important;
            height: 200px !important;
        }
        .article-thumb img {
            width: 100% !important;
            height: 200px !important;
        }
        .article-info {
            padding: 15px !important;
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
                <div class="article-thumb">
                    <img src="images/trends-2026.jpg" alt="Модные тенденции 2026">
                </div>
                <div class="article-info">
                    <h3>Модные тенденции 2026 года в дизайне интерьеров</h3>
                    <p>Натуральные материалы, экологичность и умные технологии становятся главными трендами этого года...</p>
                    <a href="article.php?id=1" class="read-more">Читать полностью →</a>
                </div>
            </div>
        
            <div class="article-item">
                <div class="article-thumb">
                    <img src="images/studiya.jpg" alt="Цветовая гамма для маленькой квартиры">
                </div>
                <div class="article-info">
                    <h3>Как выбрать цветовую гамму для маленькой квартиры</h3>
                    <p>Светлые тона визуально расширяют пространство, а правильно расставленные акценты добавляют уюта...</p>
                    <a href="article.php?id=2" class="read-more">Читать полностью →</a>
                </div>
            </div>
        
            <div class="article-item">
                <div class="article-thumb">
                    <img src="images/zoning.webp" alt="Зонирование пространства в студии">
                </div>
                <div class="article-info">
                    <h3>Зонирование пространства в студии</h3>
                    <p>Стеллажи, разные уровни пола и освещение помогут разделить комнату на функциональные зоны...</p>
                    <a href="article.php?id=3" class="read-more">Читать полностью →</a>
                </div>
       		</div>    
        
            <div class="article-item">
                <div class="article-thumb">
                    <img src="images/Eco-Design.jpeg" alt="Экодизайн в интерьере">
                </div>
                <div class="article-info">
                    <h3>Экодизайн: натуральные материалы в интерьере</h3>
                    <p>Дерево, камень, пробка и бамбук создают здоровую атмосферу в доме...</p>
                    <a href="article.php?id=4" class="read-more">Читать полностью →</a>
                </div>
            </div>
        
            <div class="article-item">
                <div class="article-thumb">
                    <img src="images/lighting.jpg" alt="Освещение в интерьере">
                </div>
                <div class="article-info">
                    <h3>Освещение в интерьере: основные правила</h3>
                    <p>Три уровня освещения — общее, рабочее и акцентное — создают комфортное пространство...</p>
                    <a href="article.php?id=5" class="read-more">Читать полностью →</a>
                </div>
            </div>
    	</div>
	</div>
</div>
<footer>
    <p>© 2026 Студия дизайна интерьера "ИнтерьерАрт". Все права защищены.</p>
</footer>
</body>
</html>