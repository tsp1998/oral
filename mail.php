<?php
session_start();
?>

<?php

$to = $_SESSION['email'];
$subject = $_SESSION['mail_sub'];
$body = $_SESSION['mail_body'];
$mail_sender = $_SESSION['mail_sender'];

$headers = array(
	"From: $mail_sender",
	"Reply-To: $mail_sender",
	"X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);

mail($to, $subject, $body, $headers);

$next_page = $_SESSION['next_page'];

echo "<script>" . "window.location='$next_page'" . "</script>";
?>