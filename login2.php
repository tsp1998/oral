<?php
session_start();
?>

<?php

if (isset($_POST['login'])) {
	$_SESSION['sub_name'] = $sub = $_POST['sub_name'];
	$dept = $_POST['dept'];
	$pass = md5($_POST['pass']);
	include 'adjust.php';
	$dept = adjDept($dept);

	include 'db_conn.php';
	$query = "select * from oral_subjects where sub_name='$sub' and dept='$dept' and pass='$pass'";
	$result = mysqli_query($conn, $query);
	if (!$result->num_rows) {
		echo "<script>alert('Wrong Subject or Password or Department')</script>";
		echo "<script>window.location='index2.php'</script>";
	} else {
		$record = $result->fetch_assoc();
		$_SESSION['email'] = $record['email'];
		$_SESSION['name'] = $record['name'];
		$_SESSION['dept'] = $record['dept'];
		$_SESSION['year'] = $record['year'];
		$_SESSION['sem'] = $record['sem'];

		echo "<script>window.location='home.php'</script>";
	}
}
?>