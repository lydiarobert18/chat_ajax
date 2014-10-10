<?php
	//on s'apprête à utiliser les sessions
	session_start();

	//si le pseudo n'est pas dans la session...
	if (empty($_SESSION['username'])){
		//interdit d'être ici : redirection vers le login
		header("Location: login.php");
		die();
	}
	
	//crée une jolie variable pour plus tard
	$username = $_SESSION['username'];


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Chat !</title>
	<meta name="description" content="">
	<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

	<div id="wrapper">
	
		<h1>Chat !</h1>

		<div id="hello">Connecté en tant que : <?php echo $username; ?></div>

		<div id="messages"></div>

		<form id="compose_form" method="POST" action="send.php">
			<input type="text" name="message" id="message" value="" />
			<input type="submit" id="compose_submit_btn" value="OK" />
		</form>
	
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
	<script src="js/chat.js"></script>
	
</body>
</html>
