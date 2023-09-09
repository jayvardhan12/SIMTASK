<?php 
session_start();
if (isset($_SESSION['admin'])) {
?>




<!DOCTYPE html>
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
                <br/>
</div>
<hr color="black"/>
<div class="container" align="center">
				<a href="index.php" class="start">Home</a>
				<a href="add.php" class="start">Add Question</a>
				<a href="allquestions.php" class="start">All Questions</a>
				<a href="players.php" class="start">Players</a>
				<a href="exit.php" class="start">Logout</a> 

			</div>
		</header>

		<main>
			<div class="container" align="center">
				<h2>Welcome back, Admin</h2>
				<br/>
				<br/>
				<br/>
				<br/>
                <br/>
				<br/>
				<br/>
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
				</body>
				</html>

				<?php } 
				else {
				header("location: admin.php");
				}
				?>