<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car-booking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php 
    include "header.html";

    $json = json_decode(file_get_contents("txt.json"), true);
    $jsonCount = count($json);
    ?>
    <main>
        <section class="hero">
            <h1>Аренда автомобилей по выгодным условиям</h1>
            <p>Выберите автомобиль для комфортного путешествия</p>
        </section>
        <h1>Бронирование автомобилей</h1>
        <section class="cars">
            <?php
                for ($a = 0; $a < $jsonCount; $a++){
                    echo '
                        <div>
                            <a href="card.php?cari='.$a.'"><div><img src="'.$json[$a]["image"].'" alt="car"></div>
                            <h1>'.$json[$a]["car"].'</h1>
                            <p>'.$json[$a]["price"].'</p></a>
                            <button onclick="book('.$a.')">Забронировать</button>
                        </div>
                    ';
                }
            ?>
        </section>

        <section class="advantages">
            <h2>Почему выбирают нас?</h2>
            <div class="advantages-list">
                <div class="advantage-item">
                    <h3>🚀 Быстрое оформление</h3>
                    <p>Забронируйте авто за 5 минут без лишних документов.</p>
                </div>

                <div class="advantage-item">
                    <h3>💰 Доступные цены</h3>
                    <p>Гибкие тарифы, скидки для постоянных клиентов.</p>
                </div>

                <div class="advantage-item">
                    <h3>📞 Круглосуточная поддержка</h3>
                    <p>Поможем в любой ситуации, работаем 24/7.</p>
                </div>

                <div class="advantage-item">
                    <h3>🚗 Широкий выбор автомобилей</h3>
                    <p>От эконом-класса до премиум-авто и внедорожников.</p>
                </div>
            </div>
        </section>


        <section class="reviews">
            <h2>Отзывы клиентов</h2>
            <div class="review-list">
                <div class="review-card">
                    <div class="review-header">
                        <span class="review-name">Иван Петров</span>
                        <span class="review-rating">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="review-text">«Арендовал авто на неделю – все прошло идеально! Быстрое оформление и отличное состояние машины.»</p>
                </div>

                <div class="review-card">
                    <div class="review-header">
                        <span class="review-name">Мария Смирнова</span>
                        <span class="review-rating">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="review-text">«Очень удобный сервис, понравилось, что поддержка работает 24/7. Рекомендую!»</p>
                </div>

                <div class="review-card">
                    <div class="review-header">
                        <span class="review-name">Александр Кузнецов</span>
                        <span class="review-rating">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="review-text">«Автомобиль был в отличном состоянии, никаких скрытых платежей. Обязательно снова обращусь.»</p>
                </div>
            </div>
        </section>

        
    </main>
    
    <?php
    include "footer.html";
    ?>

<script src="js/script.js"></script>
</body>
</html>