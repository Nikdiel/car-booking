<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <style>
        .about-intro, .mission, .team {
            text-align: center;
            padding: 20px;
        }

        .team-members {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .member {
            padding: 10px;
            border: 1px solid #ddd;
        }

    </style>
</head>
<body>
    <?php include "header.html";?>

    <main>
        <section class="about-intro">
            <h1>О нашем сервисе</h1>
            <p>Мы предлагаем аренду автомобилей по выгодным условиям.</p>
        </section>

        <section class="mission">
            <h2>Наша миссия</h2>
            <p>Сделать аренду автомобилей удобной и доступной для всех.</p>
        </section>

        <section class="team">
            <h2>Наша команда</h2>
            <div class="team-members">
                <div class="member">Алексей – Директор</div>
                <div class="member">Марина – Менеджер</div>
                <div class="member">Игорь – Поддержка</div>
            </div>
        </section>
    </main>


    <?php include "footer.html";?>
</body>
</html>