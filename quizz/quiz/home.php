<?php 
session_start();
include "connection.php";
if (isset($_SESSION['id'])) {
$query = "SELECT * FROM questions";
$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
$total = mysqli_num_rows($run);
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
			</div>
		</header>

		<main>
			<div class="container" align="center">
				<h2 align="center">Welcome to Quiz !</h2>
				<p align="center">This is just a simple quiz game to test your knowledge!</p>
				<ul align="center">
				    <li><strong>Number of questions: </strong><?php echo $total; ?></li>
				    <li><strong>Type: </strong>MCQ</li>
				    <li><strong>Estimated time for each question: </strong><?php echo $total * 0.019 * 60; ?> seconds</li>
				     <li><strong>Score: </strong>   &nbsp; +1 point for each correct answer</li>
				</ul>
				<a href="question.php?n=1" class="start">Start quiz</a>
				<a href="exit.php" class="add">Exit</a>
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

		<footer>
			<div class="container">
			Copyright &copy; <a href="https://www.linkedin.com/in/jay-vardhan-chaudhary-b5864922a/" >Jay Vardhan Chaudhary</a><br>
			</div>
		</footer>

	</body>
</html>
<?php unset($_SESSION['score']); ?>
<?php }
else {
	header("location: index.php");
}
?>