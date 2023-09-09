<?php
session_start();
include "connection.php";
?>
<?php 
if (isset($_SESSION['id'])) {
	header("location: home.php");
}
?>
<?php
if (isset($_POST['email'])) {
$email = mysqli_real_escape_string($conn , $_POST['email']);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$checkmail = "SELECT * from users WHERE email = '$email'";
	$runcheck = mysqli_query($conn , $checkmail) or die(mysqli_error($conn));
	if (mysqli_num_rows($runcheck) > 0) {
		$played_on = date('Y-m-d H:i:s');
		$update = "UPDATE users SET played_on = '$played_on' WHERE email = '$email' ";
		$runupdate = mysqli_query($conn , $update) or die(mysqli_error($conn));
		$row = mysqli_fetch_array($runcheck);
			$id = $row['id'];
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $row['email'];
		header("location: home.php");
	}
	else {
		$played_on = date('Y-m-d H:i:s');
	$query = "INSERT INTO users(email,played_on) VALUES ('$email','$played_on')";
	$run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
	if (mysqli_affected_rows($conn) > 0) {
		$query2 = "SELECT * FROM users WHERE email = '$email' ";
		$run2 = mysqli_query($conn , $query2) or die(mysqli_error($conn));
		if (mysqli_num_rows($run2) > 0) {
			$row = mysqli_fetch_array($run2);
			$id = $row['id'];
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $row['email'];
			header("location: home.php");
		}
}
	else {
		echo "<script> alert('something is wrong'); </script>";
	}
}
}
else {
	echo "<script> alert('Invalid Email'); </script>";
}
}



?>
<html>
	<head>
		<title>Jay's Quiz Application</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1 align="center">Small aim is a crime; have great aim</h1>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
</div>
<hr color="black"/>
<div class="container" align="center">
<br/>
				<br/>
				<a href="index.php" class="start" align="center">Home</a>
				<a href="admin.php" class="start" align="center">Admin Panel</a>
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</header>

		<main>
		<div class="container">
				<h2 align="center">Enter Your Email</h2>
				<form method="POST" action="" align="center">
				<input type="email" name="email" required="" >
				<input type="submit" name="submit" value="PLAY NOW">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>

			</div>


		</main>

		<footer>
			<div class="container" align="bottom">
			Copyright &copy;<a href="https://www.linkedin.com/in/jay-vardhan-chaudhary-b5864922a/">Jay Vardhan Chaudhary</a> <br>
			</div>
		</footer>

	</body>
</html>