<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

	<style type="text/css">
		.question {
			color: #ef3516;
			font-size: 24px;
			font-weight: bold;
			text-align: justify-all;
			font-family: comic sans ms;
		}

		.answer {
			font-weight: 100;
			font-size: 22px;
			color: darkblue;
			text-align: justify-all;
			font-family: serif;
			font-family: comic sans ms;
		}

		.wrap-login100 {
			width: 98%;
		}

		.wrap-login100-form-btn {
			width: 20%;
		}
	</style>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<span class="login100-form-title p-b-26">
					SKN ORAL EXAM SYSTEM
				</span>
				<span class="login100-form-title p-b-48">
					<i class="zmdi zmdi-font"></i>
				</span>

				<style type="text/css">
					.link {
						margin: 5%;
						font-size: 15px;
					}

					.wrap-login100-form-btn {
						width: 90%;
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
						$sub = $_POST['subject'];
						echo  strtoupper($sub) . " Oral Questions"; // msg
						?>
					</h1>
				</center>

				<hr>

				<div class="container">
					<div class="row">
						<div class="col-sm-6 question">Question</div>
						<div class="col-sm-6 answer">Answer</div>
					</div>
					<hr>
					<?php
					include 'db_conn.php';
					$dept = $_SESSION['dept'];
					$query = "select question,answer from oral_questions where dept='$dept' and sub_name='$sub'";
					$result = mysqli_query($conn, $query);
					if ($result->num_rows)
						while ($record = $result->fetch_assoc()) {
							echo "<div class='row'>";
							echo "<div class='col-sm-6 question'>" . $record['question'] . "</div>";
							echo "<div class='col-sm-6 answer'>" . $record['answer'] . "</div>";
							echo "</div>";
							echo "<hr>";
							// 	echo "<tr>";
							// echo "<td class='que' width='30%'>".$record['question']."</td>"."<td class='ans' width='70%'>".$record['answer']."</td>";
							// 	echo "</tr>";
						}
					?>


				</div>

				<!-- 					<div class="wrap-input100 validate-input">
 -->



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