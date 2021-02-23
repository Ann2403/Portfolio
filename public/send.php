<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$text = trim($_POST['text']);
$text = wordwrap($text, 70, "\r\n");

if (mail("zubenko9529@gmail.com",
        "Заявка с сайта",
        "ФИО:" . $name . "\r\n
        E-mail: " . $email . "\r\n
        Текст:" . $text)) {
    Header ('Location: /');
} else {
    echo "при отправке сообщения возникли ошибки";
}
