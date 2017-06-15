<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100|Roboto:100" rel="stylesheet">
  <script src="jquery-3.2.1.js"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles </h1>
<?php
include("connect.php");
// on crée une variable $reponse et on lui dit d'aller chercher dans notre base de données, avec query on lui donne la requête à effectuer qui est de sélectionner toutes nos données "SELECT *" de la table qui est "articles", on aurait pu tout énumérer les colonnes mais cela va plus vite de mettre l'étoile pour avoir tout
$requete = $bdd->query("SELECT * FROM articles ORDER BY id DESC");
// desc=ordre décroissant ;
// si on met ORDER BY titre LIMIT 0,5 = cela va nous permettre de n'avoir que les cinq titres (0est le point de départ et 5 est l'incrémentation=c'est à dire le nombre de résultats affichés

// pour afficher le résultat fetch qui va chercher les informations que l'on a défini dans notre requête
$resultat = $requete->fetchAll();
  foreach ($resultat as $value){
  echo
  '<p>titre : '.$value->titre.'</p><img src="./img/' .$value->image.'
  "><p>article : '.$value->article.'</p><hr>';
}
  ?>
</body>
</html>
