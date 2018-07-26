<?php
  $age = 19;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice6</title>
  </head>
  <body>
    <p>
      <?php
      if ($age >= 18) {
        echo 'tu es majeur';
      }else {
        echo 'tu n\'es pas majeur';
      }
       ?>
    </p>
  </body>
</html>
