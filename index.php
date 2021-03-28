<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title p-b-26">
						SKN ORAL EXAM SYSTEM
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">
								Login
							</button>
						</div>
					</div>

					<a href='signup.php'>
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<span class="login100-form-btn">
									Sign Up
								</span>
							</div>
						</div>
					</a>

					<br>
					<a href="index2.php">
						<div>
							<span class="txt1">
								Admin Login
							</span>
						</div>
					</a>

					<div class="text-center p-t-115">
						<span class="txt1">
							SKN Sinhgad College, Korti
						</span>
					</div>

					<center>
						<div>
							<span class="txt1">
								Made by <a href="https://skncse.000webhostapp.com">TSP</a>
							</span>
						</div>
					</center>

			</div>
			</form>
		</div>
	</div>
	</div>


	<div id="dropDownSelect1"></div>

	<?php include 'foot.php'; ?>

</body>

</html>