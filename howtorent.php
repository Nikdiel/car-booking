<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to rent</title>
    <style>
        .steps, .requirements, .faq {
            text-align: center;
            padding: 20px;
        }

        .steps ol {
            list-style-position: inside;
        }

        .requirements ul {
            list-style: none;
        }

        .faq p {
            font-style: italic;
        }

    </style>
</head>
<body>
    <?php include "header.html";?>

    <main>
        <section class="steps">
            <h1>Как арендовать автомобиль?</h1>
            <ol>
                <li>Выберите автомобиль</li>
                <li>Заполните данные</li>
                <li>Подтвердите бронь</li>
                <li>Получите авто</li>
            </ol>
        </section>

        <section class="requirements">
            <h2>Требования для аренды</h2>
            <ul>
                <li>Возраст от 21 года</li>
                <li>Водительский стаж от 2 лет</li>
                <li>Паспорт и права</li>
            </ul>
        </section>

        <section class="faq">
            <h2>Часто задаваемые вопросы</h2>
            <p><strong>Можно ли отменить бронь?</strong> – Да, за 24 часа до начала аренды.</p>
        </section>
    </main>


    <?php include "footer.html";?>
</body>
</html>