<?php 
$fio = $_POST['user_name'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$fio = urldecode($fio);
$email = urldecode($email);
$message = urldecode($message);

$fio = trim($fio);
$email = trim($email);
$message = trim($message);


if (mail("ya.zvetka@yandex.ru", "Заявка с сайта", "ФИО: ".$fio.". E-mail: ".$email, "From: stasgoryainov@yandex.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}


ini_set('display_errors','On');
error_reporting('E_ALL');
?>
