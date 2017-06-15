<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
      <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> -->
      <!-- <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css"> -->
      <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CSource+Sans+Pro" rel="stylesheet">
      <script src="jquery-3.2.1.js"></script>
      <!-- <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
      <link rel="stylesheet"href="style.css"/>
      <title>Exercice SQL</title>
    </head>

    <header>
  <h1>JOURNAL </h1>
    </header>
    <body>
      <form method="POST" action="script.php">
        <input type="text" name="id" placeholder="ID à modifier"/>
        <h2>Titre de l'article</h2>
          <input type="text" id="titre" name="titre" value=""/><br/>
        <h2>Image</h2>
          <input type="file" id="image" name="image" value=""/><br/>
        <h2>Le contenu de l'article</h2>
          <textarea id="article" name="article" placeholder="" row="100" value=""></textarea>
              <!--il manque la DATE DE CREATION  -->
        <h2>Créé le </h2>
          <input type="date" id="date" name="datecreation" value="">
          <input type="submit" value="OK">
      </form>

    </body>
</html>
