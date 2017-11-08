<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP</title>
  </head>
  <body>

    <!-- Exo famille -->

    <?php

      $famille = ["Maman", "Papa", "Frère", "Soeur", "Moi"];

      print_r($famille);
      echo "<br><br>";

      $plat = ["frite", "carbonnade", "poulet creme champignon"];

      print_r($plat);
      echo "<br><br>";

      $film = ["Fast&Furious", "Harry Potter", "Le Seigneur des Anneaux"];

      print_r($film[2]);
      echo "<br><br>";
    ?>

    <!--- Exo presentation        --->
    <!--- Exo Tab Multi Dimension --->
    <!--- Exo compter les hobbies --->

    <?php

      $moi = [
        "Nom" => "Chergui",
        "Prénom" => "Ilias",
        "Age" => 25,
        "Nombre de frere/soeur" => 2,
        "Hobbies" => ["Foot", "Netflix"],
        "papa" => $papa
      ];

      $papa = [
        "Nom" => "Chergui",
        "Prénom" => "Rachid",
        "Age" => 52,
        "Nombre de frere/soeur" => 5,
        "Hobbies" => ["Bricolage", "Voiture"]
      ];

      echo "<pre>";
      print_r($moi);
      echo "</pre>";

      $resultatPapa = count($papa["Hobbies"]);
      print_r("Papa a  $resultatPapa hobbies <br>");
    ?>

    <!--- Exo Tableau 2 en 1 --->

    <?php

      $web_development = [
        "frontend" => [],
        "backend" => [],
      ];

      array_push($web_development["frontend"], "xhtml", "css", "Javascript", "Flash");
      array_push($web_development["backend"], "Ruby on Rails", "Javascript");

      print_r($web_development);

    ?>
  </body>
</html>
