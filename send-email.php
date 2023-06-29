<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Dotenv\Dotenv as Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


$mail = new PHPMailer(true);

// $config = json_decode(file_get_contents('config.json'), true);
$EmailUsername = $_ENV['EmailUsername'];
$EmailPassword = $_ENV['EmailPassword'];


$body = $_POST['email'] . "<br><br><br>" . $_POST['message'];
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $EmailUsername;
$mail->Password = $EmailPassword;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom($EmailUsername);

$mail->addAddress('larionovawjy1976@mail.ru');
$mail->addReplyTo($_POST['email']);
$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body = $body;

if ($mail->send()) {
	echo "
		<script>
		alert('wiadomość wysłana');
		document.location.href= 'contact.html'
		</script>
		
		";
}
else {
	echo "
		<script>
		alert('Błąd \n $mail->ErrorInfo');
		document.location.href= 'contact.html'
		</script>
		
		";
}

?>