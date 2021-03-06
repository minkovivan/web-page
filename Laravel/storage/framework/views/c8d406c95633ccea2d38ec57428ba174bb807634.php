<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset("css/style.css")); ?>">
        <link rel="stylesheet" href="<?php echo e(asset("css/modal.css")); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
        <title>Order</title>
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
                        <img src="images/flag.png" alt="">
                        </div>
                        <div class="flagmedia">
                        <img src="images/flagmedia.png" alt="">
                        </div>
                    </nav>
                </div>
            </div>
        </header>

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
                <form class="input_data" method="POST">
                    <?php echo csrf_field(); ?>
                    <h2 class="user_name">Ваше ім'я:</h2>
                    <input class="user_input" type="text" name="name" placeholder="Ім'я" size="60" required>
                    <h2 class="user_name">Номер телефону:</h2>
                    <input class="user_input" type="text" name="phone" placeholder="Телефон" size="40" required>
                    <h2 class="user_name">Ваш e-mail:</h2>
                    <input class="user_input" type="email" name="email" placeholder="E-mail" size="40" required>
                    <button id="send" class="order_button">
                        <i class="fa fa-unlock"></i>
                        <span>Відправити</span>
                    </button>
                </form>
                <h3 class="footer_bottom3">Apollo Tuning & Sevice - Київ 2018 - 2022</h3>
            </div>
        </div>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Запит успішно надіслано. Очікуйте, вам скоро зателефонують.</p>
            </div>
        </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        <?php if(session('status') !== null): ?>
            modal.style.display = "block";
        <?php endif; ?>
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </body>
</html>
<?php /**PATH E:\WORK\PHPProjects\Apollo\resources\views/order.blade.php ENDPATH**/ ?>