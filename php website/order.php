<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Order</title>
</head>
<?php require "header.php" ?>

<body>
<div class="order_intro">
    <div class="container">
        <div class="order_inner">
            <div class="order_logo">
                <div class="order_logo_img"></div>
                <h1 class="order_logo_text">Tuning & Service</h1>
            </div>
            <h1 class="order_title">Замовити
            </h1>
        </div>
        <div class="order_text">
            <h2 class="order_subtitle">Виникло питання?
            </h2>
            <h2 class="order_subtext">Будь ласка, заповніть цю форму. Наш консультант зв'яжеться з вами найближчим часом.</h2>
        </div>
        <div class="input_data">
            <h2 class="user_name">Ваше ім'я:</h2>
            <input class="user_input" type="text" placeholder="Ім'я" size="40">
            <h2 class="user_phone">Номер телефону:</h2>
            <input class="user_input" type="text" placeholder="Телефон" size="40">
            <h2 class="user_email">Ваш e-mail:</h2>
            <input class="user_input" type="text" placeholder="E-mail" size="40">
        </div>
        <a id="send" class="order_button"  href="check.php">
            <i class="fa fa-unlock"></i>
            <span>Відправити</span>
        </a>
        <h3 class="footer_bottom3">Apollo Tuning & Sevice - Київ 2018 - 2022</h3>
    </div>
</div>




</body>