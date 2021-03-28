<?php
session_start();
?>

<?php

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$pass = md5($_SESSION['pass']);
$dept = $_SESSION['dept'];
$sem = $_SESSION['sem'];
$year = $_SESSION['year'];

include 'db_conn.php';
$query = "insert into oral_users values('$name','$email','$pass','$dept','$year','$sem')";
mysqli_query($conn, $query);

echo "<script>window.location='success.php'</script>";
?>