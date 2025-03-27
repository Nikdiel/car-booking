<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <style>
        /* Основные стили */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        main {
            min-height: 90vh;
            width: 100%;
            max-width: 900px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            text-align: center;
        }

        .section {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section.about{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .section.about>p{
            max-width: 65%;
            text-align: center;
        }

        /* Преимущества */
        .advantages ul {
            list-style: none;
            padding: 0;
        }

        .advantages li {
            background: #f1f1f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }

        /* Команда */
        .team-members {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .member {
            padding: 15px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
        }

        .member strong {
            font-size: 18px;
            color: #007BFF;
        }

        /* Адаптивность */
        @media (max-width: 600px) {
            .team-members {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <?php include "header.html"; ?>

    <main>
        <section class="section about">
            <h1>О нас</h1>
            <p>Мы – ведущий сервис по аренде автомобилей, предлагающий широкий выбор машин для любых нужд. 
               Наша цель – сделать аренду авто максимально удобной, прозрачной и доступной для всех клиентов.</p>
        </section>

        <section class="section advantages">
            <h2>Наши преимущества</h2>
            <ul>
                <li><strong>Гибкие условия аренды</strong> – от нескольких часов до долгосрочной аренды.</li>
                <li><strong>Прозрачные тарифы</strong> – никаких скрытых платежей.</li>
                <li><strong>Большой выбор автомобилей</strong> – от эконом-класса до люксовых моделей.</li>
                <li><strong>Быстрое оформление</strong> – всего несколько минут без лишних документов.</li>
                <li><strong>Поддержка 24/7</strong> – всегда готовы помочь в дороге.</li>
            </ul>
        </section>

        <section class="section team">
            <h2>Наша команда</h2>
            <div class="team-members">
                <div class="member">
                    <strong>Алексей</strong><br>Директор<br>
                    <p>Координирует работу компании, следит за высоким уровнем сервиса.</p>
                </div>
                <div class="member">
                    <strong>Марина</strong><br>Менеджер<br>
                    <p>Помогает клиентам подобрать лучший вариант автомобиля.</p>
                </div>
                <div class="member">
                    <strong>Игорь</strong><br>Поддержка<br>
                    <p>На связи 24/7 для решения любых технических вопросов.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.html"; ?>

</body>
</html>
