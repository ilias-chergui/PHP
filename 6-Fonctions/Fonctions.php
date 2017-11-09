<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fonctions PHP</title>
</head>
<body>

  <?php

    // ----- Mettre en majuscule le prenom ----- //

    function name($prenom) {
      return ucfirst($prenom);
    };

    echo name("emile");
    echo "<hr>";

    // ----- Afficher l'année en cours ----- //

    echo date("Y");
    echo "<hr>";

    // ----- Afficher la date et l'heure en cours ----- //

    echo date("d-M-Y h:m:s");
    echo "<hr>";

    // ----- Afficher la somme de 2 arguments ----- //

    function addition($value1, $value2) {
      echo $value1 + $value2;
    }

    echo addition(4, 5);
    echo "<hr>";

    // ----- Afficher la somme + message d'erreur ----- //

    function addition2($value1, $value2) {
      if (is_int($value1) == true && is_int($value2) == true) {
        return $value1 + $value2;
      } else {
      return "Erreur, argument non numérique";
      }
    }

    echo addition2(10, 20);
    echo "<hr>";

    // ----- Afficher les initiales d'un mot----- //

    function initial($motChoisi) {
      $mot = ucwords($motChoisi);
      return preg_replace("/[^A-Z]/", "", $mot);
    };

    echo initial("je dois aller manger !");
    echo "<hr>";

    // ----- Remplacer lettres "ae" par "æ"----- //

    function æ($lettre) {
      return str_replace("ae", "æ", $lettre);
    }

    echo æ("caecotrophie, chaenichthys, microsphaera, sphaerotheca");
    echo "<hr>";

    // ----- Remplacer lettres "æ" par "ae"----- //

    function ae($lettre) {
      return str_replace("æ", "ae", $lettre);
    }

    echo ae("cæcotrophie, chænichthys, microsphæra, sphærotheca");
    echo "<hr>";
  ?>

</body>
</html>
