<?php
//déclaration des variables
  $age = 19;
  $gender = true;
  //false = femme true = homme
  //if else (homme/femme)
  if ($gender == true) {
    $gender = 'un Homme';
  }else{
    $gender = 'une Femme';
  }
  //if else (mineur/majeur)
  if ($age >= 18) {
    $age = 'majeur';
  }else {
    $age = 'mineur';
  }
  ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice3</title>
  </head>
  <body>
    <p>
    <?= 'Vous êtes '.$gender. ' et vous êtes '.$age; ?>
   </p>
  </body>
</html>
