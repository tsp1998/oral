<?php
session_start();
?>

<?php

if (isset($_POST['login'])) {
	$_SESSION['email'] = $email = $_POST['email'];
	$pass = md5($_POST['pass']);
	include 'db_conn.php';
	$query = "select * from oral_users where email='$email' and pass='$pass'";
	$result = mysqli_query($conn, $query);
	if (!$result->num_rows) {
		echo "<script>alert('Wrong Email or Password')</script>";
		echo "<script>window.location='index.php'</script>";
	} else {
		$record = $result->fetch_assoc();
		$_SESSION['name'] = $record['name'];
		$_SESSION['dept'] = $record['dept'];
		$_SESSION['year'] = $record['year'];
		$_SESSION['sem'] = $record['sem'];

		echo "<script>window.location='home.php'</script>";
	}
}
?>