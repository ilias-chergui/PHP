<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Condition PHP</title>
  <link rel="stylesheet" href="./main.css">
</head>
<body>

  <?php
    /* Exo meteo */

    $temperature = 21;

    if ($temperature > 15) {
      $vetement_du_jour = "T-shirt <br>";
    } else {
      $vetement_du_jour = "Pull-over <br>";
    }

    echo $vetement_du_jour;
    echo "<br>";

    /* ----- Exercice 0 ----- */

    $chambre_est_sale = false;

    if ($chambre_est_sale == true) {
      $chambre_est_sale = "Range ta chambre, on dirait la cage d'un bonobo! <br>";
    } else {
      $chambre_est_sale = "Ta chambre est trop propre, vis un peu! <br>";
    }

    echo $chambre_est_sale;
    echo "<br>";

    /* ----- Exercice 1 ----- */

    $heure_salut = 6;

    if ($heure_salut >= 5 and $heure_salut <= 9) {
      $heure_salut = "Bonjour ! <br>";
    } elseif ($heure_salut > 9 and $heure_salut <= 12) {
      $heure_salut = "Bonne journée ! <br>";
    } elseif ($heure_salut > 12 and $heure_salut <= 16) {
      $heure_salut = "Bon après-midi ! <br>";
    } elseif ($heure_salut > 16 and $heure_salut <= 21) {
      $heure_salut = "Bonne soirée ! <br>";
    } elseif ($heure_salut > 21 and $heure_salut <5){
      $heure_salut = "Bonne nuit ! <br>";
    }

    echo $heure_salut;
    echo "<br>";
  ?>

  <!--- Exercice 2 => Message selon l'age     --->
  <!--- Exercice 3 => Message selon le sexe   --->
  <!--- Exercice 4 => Message selon la langue --->

  <div class="Age">
    <form action="conditions.php" method="get">
      <h5>Quel est ton âge ?</h5>
      Ton age : <input type="number" name="age"> <br>
      Ton sexe : H <input type="radio" name="sexe" value="homme"> F <input type="radio" name="sexe" value="femme"> <br>
      Parles-tu anglais ? : Yes <input type="radio" name="langue" value="Yes"> No <input type="radio" name="langue" value="No"> <br>
    </form>

    <?php
    extract($_GET);

      if (isset($age)) {
        if ($age < 12 and $sexe == "homme" and $langue == "No") {
          $msg = "Salut petit! <br>";
        } elseif ($age < 12 and $sexe == "homme" and $langue == "Yes") {
          $msg = "Hello Boy ! <br>";
        } elseif ($age < 12 and $sexe == "femme" and $langue == "No") {
          $msg = "Salut petite! <br>";
        } elseif ($age < 12 and $sexe == "femme" and $langue == "Yes") {
          $msg = "Hello Girl ! <br>";
        } elseif ($age >= 12 and $age < 18 and $sexe == "homme" and $langue == "No") {
          $msg = "Salut l'adolescent ! <br>";
        } elseif ($age >= 12 and $age < 18 and $sexe == "homme" and $langue == "Yes") {
          $msg = "Hello Teenage boy ! <br>";
        } elseif ($age >= 12 and $age < 18 and $sexe == "femme" and $langue == "No") {
          $msg = "Salut l'adolescente ! <br>";
        } elseif ($age >= 12 and $age < 18 and $sexe == "femme" and $langue == "Yes") {
          $msg = "Hello Teenage girl ! <br>";
        } elseif ($age >= 18 and $age < 115 and $sexe == "homme" and $langue == "No") {
          $msg = "Salut le vieux ! <br>";
        } elseif ($age >= 18 and $age < 115 and $sexe == "homme" and $langue == "Yes") {
          $msg = "Hello Sir ! <br>";
        } elseif ($age >= 18 and $age < 115 and $sexe == "femme" and $langue == "No") {
          $msg = "Salut la vieille ! <br>";
        } elseif ($age >= 18 and $age < 115 and $sexe == "femme" and $langue == "Yes") {
          $msg = "Hello Lady ! <br>";
        } elseif ($age >= 115 and $sexe == "homme" and $langue == "No") {
          $msg = "Wow ! Toujours en vie papy ? <br>";
        } elseif ($age >= 115 and $sexe == "homme" and $langue == "Yes") {
          $msg = "Wow ! Still alive, old man ? <br>";
        } elseif ($age >= 115 and $sexe == "femme" and $langue == "No") {
          $msg = "Wow ! Toujours en vie mamie ? <br>";
        } elseif ($age >= 115 and $sexe == "femme" and $langue == "Yes") {
          $msg = "Wow ! Still alive, old lady ? <br>";
        }

        echo $msg;
        echo "<br>";
      }
    ?>

  <!--- Exercice 5 => Message selon la niveau --->

    <?php

      $Note = rand(0, 20);

      if ($Note <= 3 ) {
        $message = "Ce travail est nul. <br>";
      } elseif ($Note > 3 and $Note <= 9) {
        $message = "Ce travail n'est pas terrible. <br>";
      } elseif ($Note == 10 ) {
        $message = "Tout juste la moyenne. <br>";
      } elseif ($Note > 10 and $Note <= 14) {
        $message = "C'est pas mal. <br>";
      } elseif ($Note > 14 and $Note <= 18) {
        $message = "Bravo ! <br>";
      } elseif ($Note > 18 and $Note <= 20) {
        $message = "Tricheur ! <br>";
      }

      echo "$Note/20 $message";
      echo "<br>";
    ?>
  </div>
</body>
</html>
