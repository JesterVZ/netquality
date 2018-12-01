<head>
<meta charset="UTF-8">
</head>
<?php 

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$comment = $_POST['user_comment'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'netqualityteam@mail.ru';                 // Наш логин
$mail->Password = 'NQ292j8!%';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('netqualityteam@mail.ru', 'NQ Team');   // От кого письмо 
$mail->addAddress('netqualityteam@mail.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заказ';
$mail->Body    = '
	Наш новый заказ <br> 
	Имя: ' . $name . ' <br>
	Email: ' . $email . ' <br>
	Телефон: ' . $phone . ' <br>
	Комментарий к заказу: ' . $comment . ' ';
$mail->AltBody = 'Это альтернативный текст';

echo "Спасибо за заказ, " . $name . " Твой телефон:" . $phone . " Твой Email:" . $email; 


if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>