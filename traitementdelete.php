<?php

require_once "bdd.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $requete = $bdd->prepare('DELETE FROM articles WHERE id = :id');
    $requete->bindParam(':id', $id, PDO::PARAM_INT);
    $requete->execute();
}

// Redirigez vers la page principale après la suppression
header('Location: index.php');
exit

?>