<?php

require_once "bdd.php";

$requete='SELECT * FROM articles'; // écriture de la requête
$reponses=$bdd->query($requete); // réalisation de la requête

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="styles/styles.css">

    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma liste de course</title>
</head>
<body>

    <div class="container">
        <h1>LISTE DE COURSE</h1>

        <h2>Produits à acheter</h2>

                
        <form action="inserttraitement.php" method="get">
            <label for="nom"><a>Ajouter</a></label>
            <input type="text" id="nom" name="nom"> 
            <input type="submit" value="Envoyer">
        </form>


        <?php foreach ($reponses as $reponse): ?>
            <div class="card">
                <p><?= $reponse['nom'] ?> :
                <a href="traitementdelete.php?id=<?=$reponse['id'] ?>"> Suprimer </a></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>