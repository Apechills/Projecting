<?php

//START SESSION
session_start();

//IF SESSION IS ACTIVE REDIRECT
if ($_SESSION["active"] == "true") {
	header("Location: http://192.168.1.13/stest/projecting/login/login.php");
}
?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		<meta charset="utf-8">
		<title>Projecting Web-App</title>
	</head>
	<body>
		<div id="login" class="container">
			<form id="login" action="login/login_process.php" method="post">
				<input class="form-control" type="text">
				<input class="form-control" type="password">
				<button class="btn btn-primary" type="submit">Log in</button>
			</form>
		</div>
	</body>
</html>