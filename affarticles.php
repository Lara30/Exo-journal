                    <!--POUR AFFICHER UN ARTICLE  -->
<?php
    include("connect.php");
            // il faut mettre les conditions et ainsi vérifier pour chaque variable : titre, image et article
    if(isset($_POST['titre'], $_POST['article'])) {
      if(!empty($_POST['titre']) AND !empty($_POST['article'])) {
        $titre=htmlspecialchars($_POST['titre']);
        $article=htmlspecialchars($_POST['article']);

        $ins=$bdd->prepare('INSERT INTO articles (titre, article)
        VALUES(?,?)');
        $ins->execute(array($titre, $article));
      } else {
        $erreur="Il faut remplir tous les champs";
      }
    }
    ?>
