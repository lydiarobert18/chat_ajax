<?php

	session_start();
	require_once("db.php");

	if (empty($_SESSION['lastTime'])){
		$_SESSION['lastTime'] = time() - 60*60;
	}

	$sql = "SELECT message, username, timeSent
			FROM message
			WHERE timeSent > :lastTime
			ORDER BY timeSent ASC";

	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(":lastTime", $_SESSION['lastTime']);

	//exécute la requête select
	if ($stmt->execute()){
		$messages = $stmt->fetchAll();

		if (!empty($messages)){
			$lastMessage = end($messages);
			$_SESSION['lastTime'] = $lastMessage['timeSent'];
		}
	
		//affiche les messages
		foreach($messages as $message){
			echo $message['username'] . " (" . date("d-m-Y à H:i:s", $message['timeSent']) . ")<br />";
			echo $message['message'] . "<br /><br />";
		}

	}
	else {
		echo "error";
	}