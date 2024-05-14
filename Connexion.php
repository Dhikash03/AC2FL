<?php

include "includes/config.php";


			$nom = $_GET['nom'];
			$email = $_GET['email'];
			$date = $_GET['dateNaissance'];
			$demande = $_GET['demande'];

			$requete = "INSERT INTO message(nomPersonne,melPersonne,dateNaissance,objet)
		VALUES ('$nom','$email','$date','$demande');"; 
			
			if ( !( $result = mysqli_query( $conn,$requete )))
				die( "Erreur de la requete :". $conn -> error );

			mysqli_close($conn); 


			echo"<h2>Merci, Mr, Mme $nom pour votre prise de contact, nous vous repondrons prochainement </h2>";
		?>


