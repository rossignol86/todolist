<?php

require_once "bdd.php"; // Inclure la connexion à la base de données

if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    $nom = $_GET['nom'];
    $requete = $bdd->prepare('INSERT INTO articles (nom) VALUES (:nom)');
    $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
    $requete->execute();
}

// Redirigez vers la page principale après l'insertion
header('Location: index.php');
exit;

?>