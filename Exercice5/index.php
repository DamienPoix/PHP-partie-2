<?php
$gender = 'Homme';
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
      if ($gender == 'Homme') {
        echo 'c\'est un développeur!!!';
      }else {
        echo 'c\'est une développeuse!!!';
      }
       ?>
    </p>
  </body>
</html>
