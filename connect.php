<?php
  try{
    // requête de connexion à la base de données, nous entrons la localisation de notre BDD ici "localhost", le name de notre tableau ici "exojournal", le nom d'utilisateur et le mot de passe du SQL lié à notre host
  $bdd = new PDO('mysql:host=localhost;dbname=exojournal','root','root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  }
  catch(PDOException $e){
    echo 'Connexion impossible';
  }
// dans php my admin il ne faut pas oublier de donner le premier champ ID car cela permet de numéroter les entrées d'une table une par une! et il faut mettre l'index primary et cocher AI pour que l'id soit auto-incrémenté, ainsi permettre de numéroter toutes les colonnes.
// après ce n'est pas la peine d'indiquer un index.
// ne pas mettre d'espace, de majuscule, il n'y a que les tirets du bas qui sont acceptés.
// il y a différents types : les int pour les chiffres; varchar = chaine de caractères qui va jusqu'à 255 caractères ; text = illimité ; date=au format date anglais.
//
