<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo ternaire</title>
  </head>
  <body>
    <!--- Exercice 9/10 => Ternaire --->

      <?php

        $genre = "H";
        $bonjour = ($genre == "H") ? "Bonjour Monsieur !" : "Bonjour Madame !";

        echo $bonjour;

      ?>
  </body>
</html>
