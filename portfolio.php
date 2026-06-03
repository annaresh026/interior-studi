<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио - Студия дизайна интерьера</title>
    <link rel="stylesheet" href="<?= $css_file ?>">
</head>
<style>
    .portfolio-card {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 20px;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        margin-bottom: 25px;
	}

	.portfolio-image {
         width: 280px;
         flex-shrink: 0;
         height: 200px;
         overflow: hidden;
    }

    .portfolio-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .portfolio-info {
        padding: 15px;
        flex: 1;
    }

    /* На телефонах картинка сверху */
    @media (max-width: 768px) {
        .portfolio-card {
            flex-direction: column;
        }

        .portfolio-image {
            width: 100%;
            height: 200px;
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
    <h2>Наши работы</h2>
    <p class="portfolio-intro">Посмотрите проекты, которые мы уже реализовали. Каждый из них уникален и создан с учётом пожеланий клиента.</p>
    
   
        <div class="portfolio-card">
            <div class="portfolio-image">
                <img src="images/portfolio1.jpg" alt="Квартира на Ленинском проспекте"  >
            </div>
            <div class="portfolio-info">
                <h3>Квартира на Ленинском проспекте</h3>
                <p class="project-details">85 м² • Современный стиль • 3 месяца</p>
                <p>Светлая гостиная с акцентной стеной, функциональная кухня-столовая и уютная спальня в пастельных тонах.</p>
                <span class="project-price">Стоимость проекта: 255 000 ₽</span>
            </div>
        </div>
        
        <div class="portfolio-card">
            <div class="portfolio-image">
                <img src="images/portfolio2.jfif" alt="Загородный дом в Подмосковье" >
            </div>
            <div class="portfolio-info">
                <h3>Загородный дом в Подмосковье</h3>
                <p class="project-details">220 м² • Классика с современными элементами • 6 месяцев</p>
                <p>Просторная гостиная с камином, панорамные окна и терраса. Использованы натуральные материалы.</p>
                <span class="project-price">Стоимость проекта: 660 000 ₽</span>
            </div>
        </div>
        
        <div class="portfolio-card">
            <div class="portfolio-image">
                <img src="images/portfolio3.jpg" alt="Студия 35 м²" >
            </div>
            <div class="portfolio-info">
                <h3>Студия 35 м²</h3>
                <p class="project-details">35 м² • Минимализм • 2 месяца</p>
                <p>Эргономичное решение для небольшого пространства: трансформируемая мебель и светлые тона.</p>
                <span class="project-price">Стоимость проекта: 105 000 ₽</span>
            </div>
        </div>
        
        <div class="portfolio-card">
            <div class="portfolio-image">
                <img src="images/portfolio4.jpg" alt="Лофт в центре Москвы" >
            </div>
            <div class="portfolio-info">
                <h3>Лофт в центре Москвы</h3>
                <p class="project-details">120 м² • Индустриальный стиль • 4 месяца</p>
                <p>Кирпичные стены, открытые коммуникации, большие окна и винтажная мебель.</p>
                <span class="project-price">Стоимость проекта: 360 000 ₽</span>
            </div>
        </div>
        
        <div class="portfolio-card">
            <div class="portfolio-image">
                <img src="images/portfolio5.jpg" alt="Детская комната" >
            </div>
            <div class="portfolio-info">
                <h3>Детская комната для двоих детей</h3>
                <p class="project-details">18 м² • Скандинавский стиль • 1.5 месяца</p>
                <p>Яркий и безопасный дизайн с зонированием на спальную и игровую зоны.</p>
                <span class="project-price">Стоимость проекта: 54 000 ₽</span>
            </div>
        </div>
        
        <div class="portfolio-card">
            <div class="portfolio-image">
                <img src="images/portfolio6.jpg" alt="Ресторан Уют" >
            </div>
            <div class="portfolio-info">
                <h3>Ресторан "Уют"</h3>
                <p class="project-details">300 м² • Экостиль • 5 месяцев</p>
                <p>Коммерческий интерьер с зонами разной приватности, живыми растениями и природными материалами.</p>
                <span class="project-price">Стоимость проекта: 900 000 ₽</span>
            </div>
        </div>
    
</div>
<footer>
    <p>© 2026 Студия дизайна интерьера "ИнтерьерАрт". Все права защищены.</p>
</footer>
</body>
</html>