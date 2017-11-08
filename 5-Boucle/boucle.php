<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boucle PHP</title>
</head>
<body>

  <!--- Conjugue le verde coder--->

  <?php

  $pronoms_personnels = array('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');

  foreach ($pronoms_personnels as $key => $value) {
    echo $value;
    if ($value == "Je") {
      $conjug = " code <br>";
    } elseif ($value == "Tu") {
      $conjug = " codes <br>";
    } elseif ($value == "Il/Elle") {
      $conjug = " code <br>";
    } elseif ($value == "Nous") {
      $conjug = " codons <br>";
    } elseif ($value == "Vous") {
      $conjug = " codez <br>";
    } elseif ($value == "Elles/Ils") {
      $conjug = " codent <br>";
    };
    echo $conjug;
    echo "<br>";
  };

  // ----- Afficher les chiffres de 1 à 120 (while) ----- //

  $ligne = 1;
  while ($ligne <= 120) {
    echo $ligne;
    $ligne++;
  }
  echo "<br>";
  echo "<br>";

  // ----- Afficher les chiffres de 1 à 120 (for) ----- //

  for ($ligne = 1; $ligne < 121 ; $ligne++) {
    echo $ligne;
  }
  echo "<br>";
  echo "<br>";

  $classe = ["Kevin1", "Kevin2", "Valerian", "Jimmy", "Marvin"];
  for ($prenom = 0; $prenom < count($classe); $prenom++) {
    echo "son prénom est ".$classe[$prenom] . "<br>";
    echo "<br>";
  }

  // ----- Créer un tableau de 10 pays dans uns selectbox ----- //

  $pays = ["Belgique", "France", "Allemagne", "Japon", "Chine", "Australie", "Itale", "Espagne", "Angleterre", "Suisse"];
  //////////////////////// A finir
  ?>

</body>
</html>
