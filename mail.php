<?php 

if (!empty($_POST)) {

	$message = "Вам пришло новое сообщение с сайта: \n"
	 . "Имя отправителя: " . $_POST['userName'] . "\n"
	 . "Email отправителя: " . $_POST['userEmail'] . "\n"
	 . "Сообщение: " . $_POST['message'];

	 $headers = "From: info@portal4web.ru";

	$resultMail = mail("anatoliynbulyga@gmail.com", "Сообщение с сайта", $message, $headers);

	if ( $resultMail ) {
		header('location: /success.html');

	} else {
		echo "Что то пошло не так!";
	}
}

?>