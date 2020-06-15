<?php

$subject = "Вам сообщение.";
$headers = "Content-type: text/html; charset=utf-8\r\n";

if( isset($_POST['name']) && isset($_POST['email']) ){
	
	$name = htmlspecialchars( $_POST['name'] );
	$town = htmlspecialchars( $_POST['town'] );
	$phone = htmlspecialchars( $_POST['phone'] );
	$email = htmlspecialchars( $_POST['email'] );

	$mail_body = "Имя - {$name}. Телефон- {$phone }. Город- {$town}. Email- {$email}.";

	mail("test@gmail.com", $subject, $mail_body, $headers);
	
}

header("Location: /send.html");


























