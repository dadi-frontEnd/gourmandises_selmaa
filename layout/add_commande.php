
<?php
session_start();

  require_once('include/connection.php');
  // Variables de session (supposons qu'elles sont déjà définies)
$user_id = $_SESSION['user_id'];
$total_panier = $_SESSION['total_panier'];

// Préparer l'instruction SQL avec des placeholders sécurisés pour éviter les injections SQL
$sql = "INSERT INTO commande (id_com,id_util, total_amount, created_at) VALUES (null,?, ?, NOW())";

// Préparer la requête SQL
$stmt = $connect->prepare($sql);

// Liage des paramètres et exécution de la requête
$stmt->bind_param("id", $user_id, $total_panier);

// Exécuter la requête
if ($stmt->execute()) {
    echo "New record created successfully";unset($_SESSION['total_panier']);unset($_SESSION['panier']);

    header('location:index.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  ?>