<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Беспроводные зарядные устройства</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
   
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

    <noscript><link rel="stylesheet" type="text/css" href="css/noscript.css" /></noscript>
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/noscript.css" /><![endif]-->
</head>
<body>

<div id="modal" style="z-index: 100000000000">
    <div id="heading">
        Форма заказа

    </div>

    <div id="content" class="">
        <form action="form.php" id="tForm" method="post">
            Ваш заказ - <span id="zakaz"></span><br>
        Имя*: <input type="text" name="name" required="required"><br>
        Телефон*: <input type="text" name="phone" required="required"><br>
        Email*: <input type="text" name="email" required="required"><br>
        Комментарий*: <textarea  name="comment" required="required"></textarea><br>
        <input type="hidden" name="prod"><br>
        <a type="submit" class="button red close">Заказать</a>
        </form>
    </div>
</div>

<section id="ps-container" class="ps-container">


    <div class="ps-header">
        <a href="index.php#pricing"><h1>Вернуться на главную</h1></a>
    </div><!-- /ps-header -->

    <div class="ps-contentwrapper">
        <div id="prod6" class="ps-content">
            <h2>prod6</h2>
            <span class="ps-price">&#8372;130</span>
            <p>Ускоренный режим увеличивает скорость зарядки на 50%.  Угол наклона подставки можно регулировать от 0 до 90 градусов. Встроен цветовой индикатор, который позволяет видеть состояние зарядки.

            </p>
            <video style=""  class="style-video" controls="controls" poster="images/nov.jpg">
                <source src="video/video.mp4" >
            </video>
            <a href="#" id="button5">Купить этот товар</a>
        </div>

        <div id="prod1" class="ps-content">
            <h2>prod1</h2>
            <span class="ps-price">&#8372;100</span>
            <p>Беспроводное зарядное устройство имеет широкую зарядную область с 3-мя катушками, что позволяет заряжать девайсы еще быстрее. Легко используется на ходу. Хорошо подходит в качестве подарка.

            </p>
            <video style=""  class="style-video" controls="controls" poster="images/nov.jpg">
                <source src="video/video.mp4" >
            </video>
            <a href="#" id="button6">Купить этот товар</a>
        </div>

        <div id="prod2" class="ps-content">
            <h2>prod2</h2>
            <span class="ps-price">&#8372;65</span>
            <p>Имеет ту же скорость зарядки, что и проводное зарядное устройство. Треугольная форма и тонкий профиль делают устройство необычно компактным. Во время зарядки светится цветными вспышками.

            </p>
            <video style=""  class="style-video" controls="controls" poster="images/nov.jpg">
                <source src="video/video.mp4" >
            </video>
            <a href="#" id="button1">Купить этот товар</a>
        </div>

        <div id="prod3" class="ps-content">
            <h2>prod3</h2>
            <span class="ps-price">&#8372;140</span>
            <p>Система PowerBank позволяет накопить большее количество энергии, поэтому данное устройство заряжает в 2 (!) раза быстрее, чем другое беспроводное устройство. форма, зеркальная поверхность и округлые углы обеспечивают аккуратный дизайн.

            </p>
            <video style=""  class="style-video" controls="controls" poster="images/nov.jpg">
                <source src="video/video.mp4" >
            </video>
            <a href="#" id="button2">Купить этот товар</a>
        </div>

        <div id="prod4" class="ps-content">
            <h2>prod4</h2>
            <span class="ps-price">&#8372;195</span>
            <p>Главным достоинством этой модели является сверхкомпактный дизайн, который позволяет использовать индукционное устройство в любом удобном для Вас месте и даже носить в кармане.

            </p>
            <video style=""  class="style-video" controls="controls" poster="images/nov.jpg">
                <source src="video/video.mp4" >
            </video>
            <a href="#" id="button3">Купить этот товар</a>
        </div>

        <div id="prod5" class="ps-content">
            <h2>prod5</h2>
            <span class="ps-price">&#8372;30</span>
            <p>Устройство изготовлено из качественного материала и имеет улучшенные технические характеристики. Во время работы излучает мягкий свет.

            </p>
            <video style=""  class="style-video" controls="controls" poster="images/nov.jpg">
                <source src="video/video.mp4" >
            </video>
            <a href="#" id="button4">Купить этот товар</a>
        </div>






    </div><!-- /ps-contentwrapper -->

    <div class="ps-slidewrapper">

        <div class="ps-slides">

            <div style="background-image:url(images/6.png);"></div>
            <div style="background-image:url(images/1.png);"></div>
            <div style="background-image:url(images/2.png);"></div>
            <div style="background-image:url(images/3.png);"></div>
            <div style="background-image:url(images/4.png);"></div>
            <div style="background-image:url(images/5.png);"></div>

        </div>

        <nav>
            <a href="#" class="ps-prev" ></a>
            <a href="#" class="ps-next" ></a>
        </nav>

    </div><!-- /ps-slidewrapper -->

</section><!-- /ps-container -->


<!-- jQuery if needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.reveal.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('a.close').on('click', function () {
            var name = $('input[name=name]').val();
            var phone = $('input[name=phone]').val();
            var email = $('input[name=email]').val();
            var comment = $('input[name=comment]').val();
            var prod = $('input[name=prod]').val();

            var arc = valid(email, name, phone, comment);

            if ( arc[0] == '') {
                if (confirm("Отправить форму?")) {
                    $('#tForm').submit();
                }

                $('#tForm').submit();

//            } else {
//                alert(valid(email, name, phone, comment));
//            }
            } else {
                if (arc[1][0] == 1) {
                    alert('Некоректный имейл.');
                } else if (arc[1][1] == 1) {
                    alert('Некоректное имя.');
                } else if (arc[1][2] == 1) {
                    alert('Некоректный номер');
                } else if (arc[1][3] == 1) {
                    alert('Заполните комментарий.');
                }
            }
        });
        $('#button1').click(function(e) { // Button which will activate our modal
            $('#modal').reveal({ // The item which will be opened with reveal
                animation: 'fade',                   // fade, fadeAndPop, none
                animationspeed: 600,                       // how fast animtions are
                closeonbackgroundclick: true,              // if you click background will modal close?
                dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
            });
            $('input[name=prod]').val('PROD2');
            $('#zakaz').text('PROD2');
            return false;
        });


        $('#button2').click(function(e) { // Button which will activate our modal
            $('#modal').reveal({ // The item which will be opened with reveal
                animation: 'fade',                   // fade, fadeAndPop, none
                animationspeed: 600,                       // how fast animtions are
                closeonbackgroundclick: true,              // if you click background will modal close?
                dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
            });
            $('input[name=prod]').val('PROD3');
            $('#zakaz').text('PROD3');
            return false;
        });

        $('#button3').click(function(e) { // Button which will activate our modal
            $('#modal').reveal({ // The item which will be opened with reveal
                animation: 'fade',                   // fade, fadeAndPop, none
                animationspeed: 600,                       // how fast animtions are
                closeonbackgroundclick: true,              // if you click background will modal close?
                dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
            });
            $('input[name=prod]').val('PROD4');
            $('#zakaz').text('PROD4');
            return false;
        });

        $('#button4').click(function(e) { // Button which will activate our modal
            $('#modal').reveal({ // The item which will be opened with reveal
                animation: 'fade',                   // fade, fadeAndPop, none
                animationspeed: 600,                       // how fast animtions are
                closeonbackgroundclick: true,              // if you click background will modal close?
                dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
            });
            $('input[name=prod]').val('PROD5');
            $('#zakaz').text('PROD5');
            return false;
        });

        $('#button5').click(function(e) { // Button which will activate our modal
            $('#modal').reveal({ // The item which will be opened with reveal
                animation: 'fade',                   // fade, fadeAndPop, none
                animationspeed: 600,                       // how fast animtions are
                closeonbackgroundclick: true,              // if you click background will modal close?
                dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
            });
            $('input[name=prod]').val('PROD6');
            $('#zakaz').text('PROD6');
            return false;
        });

        $('#button6').click(function(e) { // Button which will activate our modal
            $('#modal').reveal({ // The item which will be opened with reveal
                animation: 'fade',                   // fade, fadeAndPop, none
                animationspeed: 600,                       // how fast animtions are
                closeonbackgroundclick: true,              // if you click background will modal close?
                dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
            });
            $('input[name=prod]').val('PROD1');
            $('#zakaz').text('PROD1');
            return false;
        });
    });
   function valid(mail, name, phone, comment) {

        var tex = '';
       var ar = [0, 0, 0, 0];
           if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
           {
               tex += 'Некоректный имейл. ';
               ar[0] = 1;
           }
       if (!/[A-Za-zА-Яа-яЁё]+/.test(name)) {
           tex += 'Некоректное имя. ';
           ar[1] = 1;
       } 
       if (!/^\d+$/.test(phone)) {
           tex += 'Некоректный номер. ';
           ar[2] = 1;
       }
       if (comment == '') {
           tex += 'Вы не ввели ничего в комментарий. ';
           ar[3] = 1;
       }
       return [tex, ar];
   }
</script>

<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">
    $(function() {

        Slider.init();

    });
</script>
</body>
</html>