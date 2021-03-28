<?php
session_start();
?>
<?php

$otp = rand(0, 10000);
$_SESSION['otp'] = $otp;

$body = $otp . " is your otp for registration...";

$_SESSION['mail_body'] = $body;

echo "<script>window.location='mail.php'</script>";

?>