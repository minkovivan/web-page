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
                        <a class="nav_link" href="<?php echo e(route("order")); ?>">Замовлення</a>
                        <a class="nav_link" href="<?php echo e(route("gallery")); ?>">Галерея</a>
                        </nav>
                        <div class="flag">
                        <img src="<?php echo e(asset("images/flag.png")); ?>" alt="">
                        </div>
                        <div class="flagmedia">
                        <img src="<?php echo e(asset("images/flagmedia.png")); ?>" alt="">
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
                    <div class="about_gallery_photos">
                        <div class="gallery<?php echo e($id); ?>">
                            <img src="<?php echo e(asset("images/gallery$id.png")); ?>" width="100%" alt="">
                        </div>
                        <div class="gallerymedia<?php echo e($id); ?>">
                            <img src="<?php echo e(asset("images/gallerymedia$id.png")); ?>" alt="">
                        </div>
                        <h2 class="photos_description"><?php echo e($text); ?></h2>
                    </div>
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
                    <a class="gal_in_button1_1" href="<?php echo e(route("order")); ?>">Зв'язатись з нами</a>
                </gallery_intro_button1_1>
                <gallery_intro_button1 class="gallery_intro_button1">
                    <a class="gal_in_button1" href="<?php echo e(route("order")); ?>">Зв'язатись з нами</a>
                </gallery_intro_button1>
                <h2 class="center_word1_1">або</h2>
                <h2 class="gallery_footer_text2_1">Зателефонуйте</h2>
                <gallery_intro_button2 class="gallery_intro_button2">
                    <a class="gal_in_button2" href="<?php echo e(route("order")); ?>">+38 099 976 1234</a>
                </gallery_intro_button2>
                <h3 class="footer_bottom2">Apollo Tuning & Sevice - Київ 2018 - 2022</h3>
            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\wamp64\www\Apollo\resources\views/gallery_single.blade.php ENDPATH**/ ?>