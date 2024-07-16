<?php

require_once "bdd.php";

$requete='SELECT * FROM articles'; // écriture de la requête
$reponses=$bdd->query($requete); // réalisation de la requête

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma liste de course</title>
</head>
<body>

    <container>

        <h1>Ma liste de course</h1>
    
        <ul>
            <?php foreach ($reponses as $reponse): ?>
                <li>
                    <p><?= $reponse['nom'] ?> :
                    <a href="traitementdelete.php?id=<?= $reponse['id'] ?>"> supprimer</a></p>
                </li>
            <?php endforeach; ?>
        </ul>

        <form action="inserttraitement.php" method="get">
            <label for="nom">Produit :</label>
            <input type="text" id="nom" name="nom"> 
            <input type="submit" value="Envoyer">
        </form>

    </container>

</body>
</html>