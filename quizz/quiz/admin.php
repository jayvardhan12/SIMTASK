<?php
session_start();
include "connection.php";
if (isset($_SESSION['admin'])) {
	header("location: adminhome.php");
}
if (isset($_POST['password']))  {
	$password = mysqli_real_escape_string($conn , $_POST['password']);
	$adminpass = '$2a$04$j/DxWjHeDFI1tj9GnjMsauGcukYDBLbLOqGoZRqfGeSsciea0zyma';
	if (password_verify($password , $adminpass)) {
		$_SESSION['admin'] = "active";
		header("Location: adminhome.php");
	}
	else {
		echo  "<script> alert('wrong password');</script>";
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
			<div class="container" align="center">
				<h1>Small aim is a crime; have great aim</h1>
				<br/>
				<br/>
				<br/>
				<br/>

</div>
<hr color="black"/>
<div class="container" align="center">
<br/>
<br/>

				<a href="index.php" class="start">Home</a>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</header>

		<main>
		<div class="container" align="center">
				<h2>Enter Password</h2>
				<form method="POST" action="">
				<input type="password" name="password" required="" >
				<input type="submit" name="submit" value="send"> 
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>

			</div>


		</main>

		<footer>
			<div class="container">
			Copyright &copy; <a href="https://www.linkedin.com/in/jay-vardhan-chaudhary-b5864922a/">Vardhan Chaudhary</a><br>
			</div>
		</footer>

	</body>
</html>