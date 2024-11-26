<!DOCTYPE html>
<html>

<head>
	<title>This is not XAMPP‼️</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.3/gh-fork-ribbon.min.css" />
</head>

<body style="text-align:center;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<a class="github-fork-ribbon" href="https://github.com/realKfiros/docker-to-xampp.git" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>

<div class="px-4 py-5 my-5 text-center">
	<h1 class="display-5 fw-bold text-body-emphasis">This is not XAMPP‼️</h1>
	<div class="col-lg-6 mx-auto">
		<p class="lead mb-4">This is your development environment, have fun coding and debugging! 🚀</p>
		<form method="post">
			<div class="col-lg-6 col-xxl-4 my-5 mx-auto">
				<div class="d-grid gap-2">
					<input type="submit" class="btn btn-primary btn-lg" value="Check if xdebug works" name="xdebug"/>
					<input type="submit" class="btn btn-primary btn-lg" value="Check if mysql works" name="mysql"/>
					<a href="http://localhost:8081" class="btn btn-success btn-lg">phpMyAdmin</a>
					<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-sm px-4 gap-3">Don't click this button</a>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST["xdebug"]))
{
	unset($_POST["xdebug"]);
	xdebug_break();
	exit();
}

if (isset($_POST["mysql"]))
{
	unset($_POST["mysql"]);
	$mysql = new mysqli("host.docker.internal", "kfiros", "12345678", "very_neat_database");

	/* check connection */
	if (mysqli_connect_errno())
	{
		echo "<script>alert('Connect failed: " . mysqli_connect_error() . ")</script>";
		exit();
	}

	/* check if server is alive */
	if (mysqli_ping($mysql))
		echo "<script>alert('MySQL Server is alive!')</script>";
	else
		echo "<script>alert('Error: " . mysqli_error($mysql) . ")</script>";

	/* close connection */
	mysqli_close($mysql);
	exit();
}
?>
</body>

</html>
