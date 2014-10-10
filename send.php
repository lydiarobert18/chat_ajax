<?php

	session_start();

	if (!empty($_POST)){

		$message = $_POST['message'];

		require_once("db.php");

		$sql = "INSERT INTO message (message, username, timeSent)
				VALUES (:message, :username, :timeSent)";
		
		$stmt = $dbh->prepare($sql);
		
		$stmt->bindValue(":message", $message);
		$stmt->bindValue(":username", $_SESSION['username']);
		$stmt->bindValue(":timeSent", time());

		if ($stmt->execute()){
			echo "ok";
		}
		else {
			echo "error";
		}
	}