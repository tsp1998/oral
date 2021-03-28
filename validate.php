<?php
session_start();
?>

<?php
include 'adjust.php';

$_SESSION['name'] = $name = $_POST['name'];
$_SESSION['email'] = $email = $_POST['email'];
$_SESSION['pass'] = $pass = $_POST['pass'];
$_SESSION['pass2'] = $pass2 = $_POST['pass2'];
$_SESSION['dept'] = $dept = adjDept($_POST['dept']);
$_SESSION['year'] = $year = adjYear($_POST['year']);
// $_SESSION['sem'] = $sem = adjSem($_POST['sem']);
$_SESSION['sem'] = $sem = $_POST['sem'];

$otp = rand(0, 10000);
$_SESSION['otp'] = $otp;

$mail_sub = "SKN ORAL EXAM SYSTEM OTP";
$body = $otp . " is your otp for registration...";
$mail_sender = "tsp@outlook.in";

$_SESSION['mail_sub'] = $mail_sub;
$_SESSION['mail_body'] = $body;
$_SESSION['mail_sender'] = $mail_sender;

$next_page = "validating.php";
$_SESSION['next_page'] = $next_page;

echo "<script>window.location='mail.php'</script>";
?>
