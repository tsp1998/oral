<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

	<style type="text/css">
		textarea {
			width: 100%;
		}
	</style>

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

					<div class="wrap-input100 validate-input">
						<?php
						$dept = $_SESSION['dept'];
						$sem = $_SESSION['sem'];
						$year = $_SESSION['year'];
						include 'db_conn.php';

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

					How many questions you want to add?
					<br><br>
					<div class="wrap-input100 validate-input">
						<select class="input100" name="total">
							<option value="-1">Number of Questions</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="proceed">
								Proceed
							</button>
						</div>
					</div>
				</form>
				<br><br>

				<?php
				if (isset($_POST['proceed'])) {
					$total = $_POST['total'];
					$sub = $_POST['subject'];
					echo "<form action='add_db.php' method='post'>";
					echo "<input type='hidden' name='total' value=" . $total . ">";
					echo "<input type='hidden' name='sub' value=" . $sub . ">";
					for ($i = 0; $i < $total; $i++) {
						echo "Question " . ($i + 1);
						echo "<textarea rows='2' placeholder='Enter Question Here...' name='q" . ($i + 1) . "'></textarea>";
						echo "Answer " . ($i + 1);
						echo "<textarea rows='5' placeholder='Enter Answer Here...' name='a" . ($i + 1) . "'></textarea>";
						echo "<hr>";
					}
					echo "<div class='container-login100-form-btn'>";
					echo "<div class='wrap-login100-form-btn'>";
					echo "<div class='login100-form-bgbtn'></div>";
					echo "<button class='login100-form-btn' name='add'>";
					echo "Add";
					echo "</button>";
					echo "</div>";
					echo "</div>";
					echo "</form>";
				}
				?>

				<div class="text-center p-t-115">
					<span class="txt1">
						SKN Sinhgad College, Korti
					</span>
				</div>
			</div>

		</div>
	</div>
	</div>


	<div id="dropDownSelect1"></div>

	<?php include 'foot.php'; ?>
</body>

</html>