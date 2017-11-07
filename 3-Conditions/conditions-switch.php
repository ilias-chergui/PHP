<!--- Exercice 6 => Transformer if/elseif en Switch --->

  <?php

    $Note = rand(0, 20);

    switch ($Note) {
      case 0:
      case 1:
      case 2:
      case 3:
        echo "$Note/20 Ce travail est nul ! <br>";
        break;
      case 4:
      case 5:
      case 6:
      case 7:
      case 8:
      case 9:
        echo "$Note/20 Ce travail n'est pas terrible ! <br>";
        break;
      case 10:
        echo "$Note/20 Tout juste la moyenne ! <br>";
        break;
      case 11:
      case 12:
      case 13:
      case 14:
        echo "$Note/20 C'est pas mal ! <br>";
        break;
      case 15:
      case 16:
      case 17:
      case 18:
        echo "$Note/20 Bravo ! <br>";
        break;
      case 19:
      case 20:
        echo "$Note/20 Tricheur ! <br>";
        break;
    }

    echo "<br>";
  ?>

<!--- Exercice 7 => Message selon OK ou KO --->
<!--- Exercice 8 => Supprimer le else de façon à garder le même resultat --->

  <form action="conditions-switch.php" method="get">
    Ton age : <input type="number" name="age"> <br>
    Homme : <input type="radio" name="sexe" value="homme">
    Femme : <input type="radio" name="sexe" value="femme"> <br>
  </form>

  <?php

    extract($_GET);

    if (isset($age)) {
      if ($age >= 21 and $age <= 40 and $sexe == "femme") {
      $msg = "Bonjour et bienvenue parmi nous ! <br>";
    }
    //  else {
    //   $msg = "Désolé, vous ne remplissez pas les critères de sélection. <br>";
    // }

    echo $msg;
    echo "<br>";
  }

  ?>
