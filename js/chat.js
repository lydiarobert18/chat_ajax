
//functions

	function getMessages(){
		//requête ajax pour récupérer les nouveaux messages
		$.ajax({
			url: "get.php",
			success: function(response){
				//ajoute les messages reçus à la fin de la fenêtre de chat
				$("#messages").append(response);
			}
		});
	}

	function sendMessage(event){
		//empêche la soumission du formulaire
		event.preventDefault();

		//requête ajax pour envoyer le message en bdd
		$.ajax({
			url: $("#compose_form").attr("action"),
			type: $("#compose_form").attr("method"),
			data: {
				message: $("#message").val()
			},
			success: function(response){
				if (response == "ok"){
					$("#message").val(""); //vide l'input
				}
			},
			error: function(){

			}
		});
		
	}


//event listeners

	//réagit à la soumission du formulaire de message
	//#compose_form est la balise <form>
	$("#compose_form").on("submit", sendMessage);

	//appelle la fonction getMessages à chaque seconde
	window.setInterval(getMessages, 1000);