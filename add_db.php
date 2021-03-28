<?php
session_start();
?>
<?php
if (isset($_POST['add'])) {
	$total = $_POST['total'];
	$sub = $_POST['sub'];
	include 'db_conn.php';
	$dept = $_SESSION['dept'];
	$email = $_SESSION['email'];
	for ($i = 0; $i < $total; $i++) {
		$question = $_POST['q' . ($i + 1)];
		$answer = $_POST['a' . ($i + 1)];
		if (!empty($question) && !empty($answer)) {
			$query = "INSERT INTO `oral_questions`(`email`, `question`, `answer`, `sub_name`, `dept`) VALUES ('$email','$question','$answer','$sub','$dept')";
			mysqli_query($conn, $query);
		}
	}
	echo "<script>window.location='add.php'</script>";
}
?>