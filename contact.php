<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>

        .contact-form {
            text-align: center;
            padding: 20px;
        }

        form input, form textarea{
            display: block;
            margin: 10px auto;
            padding: 10px;
            width: 40%;
            max-width: 40%;
            min-width: 40%;
            max-height: 300px;
        }

        form button{
            width: 40%;
            padding: 10px;
        }

        .map {
            text-align: center;
            padding: 20px;
        }

        h2{
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <?php include "header.html";?>

    <main>

        <section class="contact-form">
            <h2>Напишите нам</h2>
            <form>
                <input type="text" placeholder="Ваше имя">
                <input type="email" placeholder="Ваш email">
                <textarea placeholder="Ваше сообщение"></textarea>
                <button type="submit">Отправить</button>
            </form>
        </section>

        <section class="map">
            <h2>Мы на карте</h2>
            <div class="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2383.6588902930353!2d69.37392089114734!3d53.313555000805394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424c950b1bc5db9f%3A0xf310098365e43497!2z0L_RgNC-0YHQv9C10LrRgiDQndGD0YDRgdGD0LvRgtCw0L3QsCDQndCw0LfQsNGA0LHQsNC10LLQsCwgMDIwMDAwINCa0L7QutGI0LXRgtCw0YM!5e0!3m2!1sru!2skz!4v1742830135989!5m2!1sru!2skz" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </section>
    </main>


    <?php include "footer.html";?>
</body>
</html>