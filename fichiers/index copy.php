

<?php

require_once "bdd.php";

$requete='SELECT * FROM articles'; // écriture de la requête
$reponses=$bdd->query($requete); // réalisation de la requête

foreach ($reponses as $reponse) {
echo "Produit : ".$reponse['nom'].'<a href=traitementdelete.php?id=' . $reponse['id'] .'> suprimer</a>'."<br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma liste de course</title>
</head>
<body>

    <h1> Ma liste de course</h1>
    
    <form action="inserttraitement.php" method="get">
        <a>Produit :</a>
        <input type="text" name="nom"> 
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
