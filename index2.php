<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login2.php" method="post">
					<span class="login100-form-title p-b-26">
						SKN ORAL EXAM SYSTEM
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid Subject is: java">
						<input class="input100" type="text" name="sub_name">
						<span class="focus-input100" data-placeholder="Subject"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<select name="dept" class="input100">
							<option value="-1">Your Department</option>
							<option value="1">CSE</option>
							<option value="2">Mechanical</option>
							<option value="3">EnTC</option>
							<option value="4">Civil</option>
							<option value="5">Electrical</option>
							<option value="6">First Year</option>
						</select>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">
								Login
							</button>
						</div>
					</div>


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