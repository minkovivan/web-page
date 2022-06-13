<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>APOLLO Tuning & Service</title>
</head>
<body>
<?php require "header.php" ?>

<div class="intro">
    <div class="container">
        <div class="logo">
            <div class="logo_img"></div>
            <h1 class="logo_text">Tuning & Service</h1>
        </div>
        <div class="intro_inner">
            <div class="intro_text">
                <h1 class="intro_title">Apollo Tuning & Service</h1>
                <p class="intro_subtitle">Тюнінг ательє у Києві - Україна</p>
            </div>
            <intro_button class="intro_button">
                <a class="in_button" href="file:///C:/Users/nekro/Desktop/%D0%92%D0%B5%D0%B1%20%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0/Apollo%20Tuning%20&%20Service/order.html">Зв'язатись з нами</a>
            </intro_button>
        </div>
        <intro_button1 class="intro_button1">
            <a class="in_button1" href="file:///C:/Users/nekro/Desktop/%D0%92%D0%B5%D0%B1%20%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0/Apollo%20Tuning%20&%20Service/order.html">Зв'язатись з нами</a>
        </intro_button1>
    </div>
</div>
</div>



<div class="second_intro">
    <div class="container">
        <div class="sec_in_text">
            <h1 class="second_title">Apollo Tuning & Service</h1>
            <p class="second_subtitle">Розкрийте потенціал свого авто.</p>
            <div class="textcols">
                <div class="textcols-item">
                    <p>Ми позиціонуємо себе як сервіс повного циклу - тобто Ви просто залишаєте машину та побажання, а ми повертаємо готовий, чисто вимитий автомобіль. Працюємо з 2018 року і за цей час здійснили величезну кількість проектів, деякі з яких Ви можете побачити в розділі “Наші роботи”. Якість для нас – понад усе, на все надається гарантія.</p>
                </div>
                <div class="textcols-item">
                    <p>Якісно і з гарантією встановимо на базі власного СТО або спрацюємо як інтернет-магазин тюнінгу - Ви можете замовити та купити з доставкою по Україні будь-які види запчастин для тюнінгу, просто скажіть, що необхідно, а ми запропонуємо хорошу ціну.</p>
                </div>
                <div class="textcols-item">
                    <p>Комплекти тюнінгу, обважування, системи вихлопу, ковані диски – прямі поставки від таких світових брендів як Brabus, AMG, Lorinser, Carlsson, Wald, Mansory, Lumma, Hamann, Prior Design, Remus, Eisenmann та інші.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="third_intro">
    <div class="container">
        <div class="thrd_in_text">
            <h1 class="third_title">Відкрийте</h1>
            <p class="third_subtitle">наші можливості</p>
        </div>
        <div class="third_intro_photos">
            <?php
            for($i=0; $i<3; $i++):
            ?>
            <div class="about_photos">
                <a class="photo_link" href="file:///C:/Users/nekro/Desktop/%D0%92%D0%B5%D0%B1%20%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0/Apollo%20Tuning%20&%20Service/gallery.html">
                    <div class="photo1">
                        <img src="images/photo<?php echo ($i + 1) ?>.jpg" alt="">
                    </div>
                    <?php endfor; ?>
                    <?php
                    for($i=10; $i<13; $i++):
                    ?>
                    <div class="photo1_1">
                        <img src="images/mediaphoto<?php echo ($i + 1) ?>.png" alt="" href="file:///C:/Users/nekro/Desktop/%D0%92%D0%B5%D0%B1%20%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0/Apollo%20Tuning%20&%20Service/gallery.html">
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
        <h3 class="lower_subtitle">Ми пропонуємо досвідчених фахівців та відмінну якість.
            Індивідуальний підхід до кожного автомобіля.<br>Ми робимо:<br> Stage тюнінг, нанесення захисної та кольорової плівки, хімчистка салону, зовнішній стайлінг автомобілю.</h3>
    </div>
</div>

<?php require "footer.php" ?>

</body>
</html>