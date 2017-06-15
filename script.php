<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet"> -->
  <!-- <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100|Roboto:100" rel="stylesheet">
  <script src="jquery-3.2.1.js"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Exercice SQL</title>
</head>

<body>
  <h1>Page de Script </h1>
  <div class="formulaire">
    <form method="POST" action="liste.php">
    <input type="submit" value="soumettre">
    </form>

<?php
    include("connect.php");
    // il faut mettre les conditions et ainsi vérifier pour chaque variable : titre, image et article
    // if(isset($_POST['titre']) AND isset($_POST['image']) AND isset($_POST['article']) AND isset($_POST['id']))
        // ici on crée une variable appelée "$demande", ayant pour but      de préparer une requête à l'exécution et on lui dit de chercher dans notre base de données ; ensuite on utilise "insert into" pour insérer notre table "articles", insérer quoi? la valeur des différents attributs

// $demande = $bdd->prepare("INSERT INTO articles (titre, image, article,date)

//             -- on peut très bien l'écrire comme ça :
//             -- $requete=$bdd->prepare(insert into articles qui est notre table et ()on met les valeurs de la table )
//             -- $requete->execute(array($_POST));
//             -- quand on n'a pas beaucoup de variables, les ? sont suffisants, sinon on fait 'titre'=>$_POST'titre' entre crochets!
//             -- prepare=quand on veut préparer la requête et que l'on veut exécuter avec les variables qu'un utilisateur a rentré via un formulaire ; à, la différence de EXEC qui marche en fonction des données que l'on connaît
//

// ---------POUR METTRE UNE ENTREE A JOUR (ici l'id)---------------------------

{$demande=$bdd->prepare("UPDATE articles SET titre=?, image=?, article=?
  WHERE id=?");
// VALUES (?, ?, ?)");
// VALUES (:titre, :image, :article)");
// ici on demande d'exécuter la requête écrite au-dessus, à savoir "prepare"
$demande->execute(array(
  $_POST['titre'],$_POST['image'],$_POST['article'],$_POST
['id']));
//     'titre' => $_POST['titre'],
//     'image' => $_POST['image'],
//     'article' => $_POST['article']
// ));
}
?>
<!-- on définit ici les variables avec la méthode du formulaire POST -->


</body>
</html>
