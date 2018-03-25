<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'class-form.php';
require_once 'class-voiture.php';
require_once 'conditions.php';
require_once 'sanitizer-class.php';

$sanitizer= new Sanitizer();
$form= new Form();
$car= new Voiture();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>bonjour</h2>
    <?php
    echo $form->form_start('parc-voitures');
    echo $form->input_select_start('modele');
    echo $form->option_select('audi');
   echo $form->option_select('fiat');
    echo $form->option_select('renault');
    echo $form->option_select('alfa');
    echo $form->input_select_end();
    echo $form->submit();
     ?>
  </body>
</html>
