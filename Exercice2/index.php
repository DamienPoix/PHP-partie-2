<?php
$isEasy = true;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice2</title>
  </head>
  <body>
    <p>
    <?php
    if ($isEasy == true) {
      echo 'C est trop facile' ;
    }else {
      echo 'c\'est trop difficile!!';
    }
     ?>
   </p>
  </body>
</html>
