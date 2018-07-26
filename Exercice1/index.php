<?php
  $age = 18;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
    <?php
    if ($age >= 18) {
      echo 'Vous etes majeur';
    } else {
      echo "Vous etes mineur";
    }
     ?>
   </p>
  </body>
</html>
