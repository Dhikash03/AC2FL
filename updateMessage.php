<?php
include "includes/config.php";

$id = $_POST['id'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$date = $_POST['dateNaissance'];
$demande = $_POST['demande'];
$requete = "UPDATE message set nomPersonne='$nom', melPersonne='$email',
dateNaissance='$date', objet='$demande' where idMessage = $id";
if ( !( $result = mysqli_query( $conn,$requete )))
die( "Erreur de la requete :". $conn -> error );
mysqli_close($conn);
header('Location: listeMessages.php');


?>
