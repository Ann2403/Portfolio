<?php
$_POST = json_decode(file_get_contents('php://input'),true);
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$to = "zubenko9529@gmail.com";
$subject = "Заявка с сайта";
$text = "ФИО:" . $_POST['name'] . "\r\n
        E-mail: " . $_POST['email'] . "\r\n
        Текст:" . $_POST['text'];

mail($to, $subject, $text);
