
<?php
    require 'faculte/faculte.php';
    require 'faculte/informatique.php';
    require 'faculte/droit.php';
    require 'faculte/economie.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Universite du savoir</title>
  </head>
  <body>
    <?php
    $informatique = new informatique;


    $informatique->setNom_fac('Informatique');
    $informatique->setNom_depart('Genie logiciel');
    $informatique->setAnnee_aca('2020-2021');
    $informatique->setPeriode_inscr('01-01-2020 au 01-02-2020');


echo  $informatique->AfficherInfo();

echo "<br>";
echo "<br>";
$droit = new droit;


    $droit->setNom_fac('droit');
    $droit->setNom_depart('droit international');
    $droit->setAnnee_aca('2020-2021');
    $droit->setPeriode_inscr('01-01-2020 au 01-02-2020');


echo  $droit->AfficherInfo();
echo "<br>";
echo "<br>";
$economie = new economie;


    $economie->setNom_fac('economie');
    $economie->setNom_depart('economie politique');
    $economie->setAnnee_aca('2020-2021');
    $economie->setPeriode_inscr('01-01-2020 au 01-02-2020');


echo  $economie->AfficherInfo();

     ?>

  </body>
</html>
