<?php

// Inclure le fichier de connexion à la base de données

require_once('includes/connection.php');
include_once('includes/functionAdmlte.php');
 $id=(isset($_GET['id']))?$_GET['id']:NULL;
 echo $id;
 $sql="DELETE FROM commande WHERE id_com='$id'";
 $qry=mysqli_query($connect,$sql);
//verifier si la table produit est vide metre cpt=1
decremente('commande');
// Fermeture de la connexion à la base de données
 mysqli_close($connect);



?>