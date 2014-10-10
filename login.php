<?php
	
	if (!empty($_POST)){
		
		//on s'apprête à utiliser les sessions
		session_start();

		//stockage du pseudo dans la session...
		$_SESSION['username'] = $_POST['username'];

		//puis redirection vers le chat
		header("Location: index.php");
		die();
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Login | Chat !</title>
	<meta name="description" content="">
	<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body class="login">

	<div id="wrapper">
	
		<h1>Connexion au chat !</h1>

		<form id="login_form" method="POST">

			<label for="username">Votre pseudo pour cette session de chat : </label>
			<input type="text" name="username" id="username" value="" />

			<input type="submit" value="Connection" />
		</form>
	
	</div>

</body>
</html>
