<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset("css/style.css")); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
        <title>Gallery</title>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="header_inner">
                    <div class="header_contacts">
                        <p class="head_cont">+38 099 976 1234</p>
                        <p class="head_cont">Україна, м.Київ, вул. Хрещатик 10</p>
                        </div>
                        <nav class="nav">
                        <a class="nav_link" href="/">Головна</a>
                        <a class="nav_link" href="<?php echo e(route('order')); ?>">Замовлення</a>
                        <a class="nav_link" href="<?php echo e(route('gallery')); ?>">Галерея</a>
                        </nav>
                        <div class="flag">
                        <img src="images/flag.png" alt="">
                        </div>
                        <div class="flagmedia">
                        <img src="images/flagmedia.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="gallery_intro">
            <div class="container">
                <div class="gallery_inner">
                    <div class="gallery_logo">
                        <div class="gallery_logo_img"></div>
                        <h1 class="gallery_logo_text">Tuning & Service</h1>
                    </div>
                    <h1 class="gallery_title">Наші роботи
                    </h1>
                </div>
            </div>
        </div>

        <div class="gallery_intro">
            <div class="container">
                <div class="gallery_intro_photos">
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/1"); ?>">
                        <div class="gallery1">
                            <img src="images/gallery1.png" alt="">
                        </div>
                        <div class="gallerymedia1">
                            <img src="images/gallerymedia1.png" alt="">
                        </div>
                        <h2 class="photos_description">Хімчистка салону Mercedes-Benz GLS</h2>
                    </a>
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/2"); ?>">
                        <div class="gallery2">
                            <img src="images/gallery2.png" alt="">
                        </div>
                        <div class="gallerymedia2">
                            <img src="images/gallerymedia2.png" alt="">
                        </div>
                        <h2 class="photos_description">Stage 1 тюнінг<br>Mercedes-Benz GT 63 AMG</h2>
                    </a>
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/3"); ?>">
                        <div class="gallery3">
                            <img src="images/gallery3.png" alt="">
                        </div>
                        <div class="gallerymedia3">
                            <img src="images/gallerymedia3.png" alt="">
                        </div>
                        <h2 class="photos_description">Полірування деталей інтер’єру<br>Mercedes AMG GT</h2>
                    </a>
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/4"); ?>">
                        <div class="gallery4">
                            <img src="images/gallery4.png" alt="">
                        </div>
                        <div class="gallerymedia4">
                            <img src="images/gallerymedia4.png" alt="">
                        </div>
                        <h2 class="photos_description">Нанесення захисної керамічної плівки</h2>
                    </a>
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/5"); ?>">
                        <div class="gallery5">
                            <img src="images/gallery5.png" alt="">
                        </div>
                        <div class="gallerymedia5">
                            <img src="images/gallerymedia5.png" alt="">
                        </div>
                        <h2 class="photos_description">Повне полірування салону та<br>встановлення додаткової шумоізоляції</h2>
                    </a>
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/6"); ?>">
                        <div class="gallery6">
                            <img src="images/gallery6.png" alt="">
                        </div>
                        <div class="gallerymedia6">
                            <img src="images/gallerymedia6.png" alt="">
                        </div>
                        <h2 class="photos_description">Обслуговування Mercedes-Benz S class</h2>
                    </a>
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/7"); ?>">
                        <div class="gallery7">
                            <img src="images/gallery7.png" alt="">
                        </div>
                        <div class="gallerymedia7">
                            <img src="images/gallerymedia7.png" alt="">
                        </div>
                        <h2 class="photos_description">Догляд за інтер’єром<br>Porsche Panamera 4S</h2>
                    </a>
                    <a class="about_gallery_photos" href="<?php echo e(route("gallery")."/8"); ?>">
                        <div class="gallery8">
                            <img src="images/gallery8.png" alt="">
                        </div>
                        <div class="gallerymedia8">
                            <img src="images/gallerymedia8.png" alt="">
                        </div>
                        <h2 class="photos_description">Опрацювання блискучих матеріалів<br>Porsche Panamera 4S</h2>
                    </a>
                </div>
            </div>
        </div>

        <div class="gallery_intro">
            <div class="container">
                <div class="gallery_footer">
                    <h2 class="gallery_footer_text1">
                    Бажаєте зробити<br>замовлення?
                    </h2>
                    <h2 class="center_word">або</h2>
                    <h2 class="gallery_footer_text2">Зателефонуйте</h2>
                </div>
                <gallery_intro_button1_1 class="gallery_intro_button1_1">
                    <a class="gal_in_button1_1" href="https://minkovivan.github.io/web-page/order.html">Зв'язатись з нами</a>
                </gallery_intro_button1_1>
                <gallery_intro_button1 class="gallery_intro_button1">
                    <a class="gal_in_button1" href="https://minkovivan.github.io/web-page/order.html">Зв'язатись з нами</a>
                </gallery_intro_button1>
                <h2 class="center_word1_1">або</h2>
                <h2 class="gallery_footer_text2_1">Зателефонуйте</h2>
                <gallery_intro_button2 class="gallery_intro_button2">
                    <a class="gal_in_button2" href="https://minkovivan.github.io/web-page/order.html">+38 099 976 1234</a>
                </gallery_intro_button2>
                <h3 class="footer_bottom2">Apollo Tuning & Sevice - Київ 2018 - 2022</h3>
            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\wamp64\www\Apollo\resources\views/gallery.blade.php ENDPATH**/ ?>