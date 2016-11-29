<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$prod = $_POST['prod'];

$message = <<<_JS
Имя: $name;
Телефон: $phone;
Имейл: $email;
Комментарий: $comment;
Продукт: $prod;
_JS;

if (mail('viacheslavreka@gmail.com', 'Писимо с сайта', $message)) {
    header("Location: http://929896.vdtvdt.web.hosting-test.net/index.php");
} else {
    header("Location: http://929896.vdtvdt.web.hosting-test.net/index.php");
}


