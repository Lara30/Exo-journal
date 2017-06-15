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
  // -------POUR MODIFIER via l'ID les valeurs de titre, image et article--------------------------
  {$demande=$bdd->prepare("UPDATE articles SET titre=?, image=?, article=?
  WHERE id=?");
      // VALUES (?, ?, ?)");
      // VALUES (:titre, :image, :article);
  // ici on demande d'exécuter la requête écrite au-dessus, à savoir "prepare" on définit ici les variables avec la méthode du formulaire POST
    $demande->execute(array(
      $_POST['titre'],$_POST['image'],$_POST['article'],$_POST
      ['id']));
    }
?>
  </body>
  </html>
