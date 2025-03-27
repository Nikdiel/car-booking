<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как арендовать автомобиль?</title>
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

        /* Процесс аренды */
        .steps ol {
            list-style: none;
            padding: 0;
            counter-reset: step-counter;
        }

        .steps li {
            text-align: left;
            padding: 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            counter-increment: step-counter;
        }

        .steps li::before {
            content: counter(step-counter);
            background: #007BFF;
            color: white;
            font-weight: bold;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        /* Требования */
        .requirements ul {
            list-style: none;
            padding: 0;
        }

        .requirements li {
            background: #f1f1f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }

        /* Часто задаваемые вопросы (аккордеон) */
        .faq-item {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
        }

        .faq-item:hover {
            background: #f1f1f1;
        }

        .faq-answer {
            display: none;
            padding: 10px;
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>

    <?php include "header.html"; ?>

    <main>
        <!-- Процесс аренды -->
        <section class="section steps">
            <h1>Как арендовать автомобиль?</h1>
            <ol>
                <li>Выберите автомобиль из доступного каталога.</li>
                <li>Заполните заявку, указав личные данные и предпочтения.</li>
                <li>Подтвердите бронь, оплатите залог (если требуется).</li>
                <li>Получите автомобиль в пункте выдачи или закажите доставку.</li>
            </ol>
        </section>

        <!-- Требования для аренды -->
        <section class="section requirements">
            <h2>Требования для аренды</h2>
            <ul>
                <li>Возраст от 21 года (для премиум-класса — от 25 лет).</li>
                <li>Водительский стаж не менее 2 лет.</li>
                <li>Оригинал паспорта и водительских прав.</li>
                <li>Банковская карта для оплаты (при необходимости).</li>
            </ul>
        </section>

        <!-- Часто задаваемые вопросы -->
        <section class="section faq">
            <h2>Часто задаваемые вопросы</h2>
            <div class="faq-item" onclick="toggleAnswer(0)">Можно ли отменить бронь?</div>
            <div class="faq-answer">Да, вы можете отменить бронь за 24 часа до начала аренды без штрафов.</div>

            <div class="faq-item" onclick="toggleAnswer(1)">Что делать в случае аварии?</div>
            <div class="faq-answer">Немедленно свяжитесь с нашей службой поддержки и вызовите ГИБДД.</div>

            <div class="faq-item" onclick="toggleAnswer(2)">Есть ли ограничения по пробегу?</div>
            <div class="faq-answer">Для большинства авто установлен дневной лимит 300 км. За превышение взимается доплата.</div>

            <div class="faq-item" onclick="toggleAnswer(3)">Можно ли взять авто за границу?</div>
            <div class="faq-answer">Аренда с выездом за границу возможна по согласованию с менеджером.</div>
        </section>
    </main>

    <?php include "footer.html"; ?>

    <script>
        function toggleAnswer(index) {
            let answers = document.querySelectorAll(".faq-answer");
            answers[index].style.display = (answers[index].style.display === "block") ? "none" : "block";
        }
    </script>

</body>
</html>
