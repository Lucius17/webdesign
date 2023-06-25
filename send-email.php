<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



$mail = new PHPMailer(true);

$config = json_decode(file_get_contents('config.json'), true);
$EmailUsername = $config['EmailUsername'];
$EmailPassword = $config['EmailPassword'];
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $EmailUsername;
$mail->Password = $EmailPassword;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom($_POST["email"]);

$mail->addAddress('larionovawjy1976@mail.ru');
$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];

if ($mail->send()) {
	echo "
		<script>
		alert('wiadomość wysłana');
		document.location.href= 'contact.html'
		</script>
		
		";
}
else {
	echo 'Wysłanie wiadomości nie powiodło się. Błąd: ' . $mail->ErrorInfo;
}

?>