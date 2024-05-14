<?php

include "includes/config.php";

$id = $_GET['id'];

$requete = "DELETE FROM message where idMessage = $id";

if ( !( $result = mysqli_query( $conn,$requete )))
    die( "Erreur de la requete :". $conn -> error );

mysqli_close($conn);

header('Location: listeMessages.php'); 

echo "<td><a href=deleteMessage.php?id=".$row['idMessage']." onClick=
\"return(confirm('Etes-vous sûr de vouloir supprimer ce message ?'));
\">delete</a></td> ";




?>

