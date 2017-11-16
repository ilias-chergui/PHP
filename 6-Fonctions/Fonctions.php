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

    $mot1 = "caecotrophie";
    $mot2 = "chaenichthys";
    $mot3 = "microsphaera";
    $mot4 = "sphaerotheca";

    function æ($lettre) {
      return str_replace("ae", "æ", $lettre);
    }

    echo æ("$mot1, $mot2, $mot3, $mot4");
    echo "<hr>";

    // ----- Remplacer lettres "æ" par "ae"----- //

    function ae($lettre) {
      return str_replace("æ", "ae", $lettre);
    }

    echo ae(æ("$mot1, $mot2, $mot3, $mot4"));
    echo "<hr>";

    // ----- Message d'alerte ----- //

    $msgAlerte = "Weichuan, t'es nul !!!";
    $classCss = "attention";

    function feedback($msgAlerte, $classCss)
    {
      return "<div class=$classCss>$msgAlerte.</div>";
    }

    echo feedback($msgAlerte, $classCss);
    echo "<hr>";

    // ----- Changer la classe précédente si pas spécifiée (dans le rappel de la fonction dans l'echo)----- //

    $msgAlerte2 = "Kevin est notre sauveur !!";
    $classCss2 = "attention";

    function feedback2($msgAlerte2, $classCss2 = "info")
    {
      return "<div class=$classCss2>$msgAlerte2.</div>";
    }

    echo feedback2($msgAlerte2);
    echo "<hr>";
    echo "<hr>";

    // ----- Générer 1 mot de max 5 lettres aléatoirement ----- //

    function generateur() {

      $lettres = "";

      for ($i=0; $i < 5; $i++) {
        $lettres .= chr(rand(97, 122));
      };
      return $lettres;
    };

    echo generateur();
    echo "<hr>";

    // ----- Généger un mot de min 7 lettres et max 15 lettres ----- //

    function generateur2() {

      $lettres2 = "";

      for ($ii=7; $ii < 15; $ii++) {
        $lettres2 .= chr(rand(97, 122));
      };
      return $lettres2;
    };

    echo generateur2();
    echo "<hr>";
  ?>

  <form action="Fonctions.php">
    <input type="submit" value="Regénérer vos mots">
  </form>

  <?php

    echo '<hr>';

    // ----- Convertire une chaine de charactere de MAJUSCULE en minuscule ----- //

    $ToMinuscule = "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";

    echo mb_strtolower($ToMinuscule);
    echo '<hr>';

    // ----- Calculer le volume d'un cône en fonction du rayon et de la hauteur ----- //

  ?>
</body>
</html>
