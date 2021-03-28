<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="questions.php" method="post">
					<span class="login100-form-title p-b-26">
						SKN ORAL EXAM SYSTEM
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<style type="text/css">
						.link {
							margin: 3%;
							font-size: 15px;
						}
					</style>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<a class="link" href='home.php'>Home</a>
							<a class="link" href='add.php'>Add Questions</a>
							<a class="link" href='logout.php'>LogOut</a>
						</div>
					</div>
					<br>

					<center>
						<h1>
							<?php
							echo "Hello " . $_SESSION['name']; //welcome msg
							?>
						</h1>
					</center>

					<br>

					<div class="wrap-input100 validate-input">
						<?php
						include 'db_conn.php';
						$dept = $_SESSION['dept'];
						$sem = $_SESSION['sem'];
						$year = $_SESSION['year'];
						$query = "select sub_name from oral_subjects where dept='$dept' and sem='$sem' and year='$year'";
						$result = mysqli_query($conn, $query);
						echo "<select name='subject' class='input100'>";
						echo "<option value='-1'>Select Subject</option>";
						if ($result->num_rows)
							while ($record = $result->fetch_assoc()) {
								echo "<option value=" . $record['sub_name'] . ">" . $record['sub_name'] . "</option>";
							}
						echo "</select>";
						?>

					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								proceed
							</button>
						</div>
					</div>

					<a href='add.php'>
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<span class="login100-form-btn">
									ADD questions
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