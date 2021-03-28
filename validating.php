<?php
session_start();
?>


<?php

if (isset($_POST['verify'])) {
	$otp2 = $_POST['otp2'];
	$otp = $_SESSION['otp'];
	if ($otp == $otp2) {
		echo "<script>window.location='signup_db.php'</script>";
	} else
		echo "<script>alert('Wrong OTP')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-26">
						SKN ORAL EXAM SYSTEM
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					Check Your Mailbox Please
					<br><br>
					<div class="wrap-input100 validate-input" data-validate="Valid OTP is like : 1234">
						<input class="input100" type="text" name="otp2">
						<span class="focus-input100" data-placeholder="Enter OTP"></span>
					</div>

					<a href='signup.php'>
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button name='verify' class="login100-form-btn">
									Proceed
								</button>
							</div>
						</div>
					</a>

					<a href='resend.php'>
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<span class="login100-form-btn">
									Resend OTP
								</span>
							</div>
						</div>
					</a>


					<div class="text-center p-t-115">
						<span class="txt1">
							SKN Sinhgad College, Korti
						</span>
					</div>
			</div>
			</form>
		</div>
	</div>
	</div>


	<div id="dropDownSelect1"></div>

	<?php include 'foot.php'; ?>

</body>

</html>