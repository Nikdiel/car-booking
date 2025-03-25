<?php
$index = $_GET["cari"];
$json = json_decode(file_get_contents("txt.json"), true);
$car = $json[$index];
$carCount = count($car) - 1;
$specs = $car["specs"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $json[$index]["car"];?></title>
    <style>
        section{
            display: flex;
            justify-content: space-around;
            width: 70%;
        }
        .im{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 370px;
            height: 250px;
            border-radius: 20px;
            overflow: hidden;
        }
        .im>img{
            height: 250px;
        }
        .txt{
            font-family: 'Courier New', Courier, monospace;
            max-width: 500px;
        }
        .txt>ul{
            padding: 0;
            margin: 5px;
        }
        .txt li{
            list-style: none;
            padding-left: 20px;
            margin: 5px 0;
        }
        .list a{
            text-decoration: none;
            color: black;
        }
        .list a>div{
            width: 245px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 10px;
        }
        .list img{
            height: 170px;
        }
        button{
            position: relative;
            float: right;
            padding: 5px;
            border: 1px solid gray;
            border-radius: 5px;
        }
        h1{
            font-family: auto;
        }
        .noch{
            display: flex;
            align-items: center;
        }
        .noch::before, .noch::after{
            content: "";
            width: 100px;
            height: 1px;
            background-color: gray;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <?php include "header.html";?>
    
    <section class="card">
        <?php echo '
                <div class="im"><img src="'.$car["image"].'" alt="car"></div>
                <div class="txt">
                    <ul><b>Характеристики '.$car["car"].':</b><br><br>
                        <li>Двигатель: '.$specs["engine"].'</li>
                        <li>Коробка передач: '.$specs["transmission"].'</li>
                        <li>Привод: '.$specs["drive"].'</li>
                        <li>Количество мест: '.$specs["seats"].'</li>
                        <li>Топливо: '.$specs["fuel"].'</li>    
                    </ul>
                    <p>Описание: '.$car["description"].'</p>
                    <p style="display: inline-block;">Цена: '.$car["price"].'</p>
                    <button onclick="book('.$index.')" style="margin: 14px;">Забронировать</button>
                </div>
                ';
        ?>
    </section>
    <p class="noch">Другие варианты</p>
    <section class="list">
        <?php
            for ($a = 0; $a < $carCount; $a++){
                if($a == $index){
                    continue;
                }
                echo '
                    <div>
                        <a href="card.php?cari='.$a.'"><div><img src="'.$json[$a]["image"].'" alt="car"></div>
                        <h1>'.$json[$a]["car"].'</h1>
                        <p style="display: inline;">'.$json[$a]["price"].'</p></a>
                        <button onclick="book('.$a.')">Забронировать</button>
                    </div>
                ';
            }
        ?>
    </section>

    <?php include "footer.html";?>

    <script src="js/script.js"></script>
</body>
</html>