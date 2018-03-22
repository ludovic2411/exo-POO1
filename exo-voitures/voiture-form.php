<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'class-form-exo-voitures.php';
require 'class-voitures/voiture-class-audi.php';
require 'class-voitures/voiture-class-fiat.php';
require 'class-voitures/voiture-class-alfa.php';
require 'class-voitures/voiture-class-renault.php';
$form=new Form();
//require 'class-voitures/voiture-class-audi.php';
//$modele='audi';
$selection_client=$_POST['modele'];
if ( $_POST['modele']=="audi"){
  $voiture=new Audi();
  if ($voiture->poids<='3,5') {
    $etat="voiture privée";
  }else {
    $etat="voiture utilitaire";
  }
  if ($voiture->kilometrage<"100.000") {
    $usage="low";
  }elseif ($voiture->kilometrage>'100.000' and $voiture->kilometrage<'200.000') {
    $usage="medium";
  }elseif ($voiture->kilometrage>'200.000') {
    $usage="high";
  }
  if (strpos($voiture->plaque, 'FR') ==true){
    $pays='France';
  }elseif (strpos($voiture->plaque, 'BE') ==true){
    $pays='Belgique';
  } else{
    $pays='Allemagne';
  }
  echo '<p>"'.$voiture->modele.'"</p>';
  echo '<p>"'.$voiture->statut.'"</p>';
   $poids_voiture=$voiture->poids;
   //echo '<p>"'.$poids_voiture.'"</p>';
   echo '<p>"'.$etat.'"</p>';
   echo '<p>"'.$usage.'"</p>';
   echo '<p>"'.$pays.'"</p>';
}elseif ($_POST['modele']=="fiat") {
  $voiture=new Fiat();
  if ($voiture->poids<='3,5') {
    $etat="voiture privée";
  }else {
    $etat="voiture utilitaire";
  }
  if ($voiture->kilometrage<"100.000") {
    $usage="low";
  }elseif ($voiture->kilometrage>'100.000' and $voiture->kilometrage<'200.000') {
    $usage="medium";
  }elseif ($voiture->kilometrage>'200.000') {
    $usage="high";
  }
  if (strpos($voiture->plaque, 'FR') ==true){
    $pays='France';
  }elseif (strpos($voiture->plaque, 'BE') ==false){
    $pays='Belgique';
  } else{
    $pays='Autre';
  }
  echo '<p>"'.$voiture->modele.'"</p>';
  echo '<p>"'.$voiture->statut.'"</p>';
  echo '<p>"'.$etat.'"</p>';
  echo '<p>"'.$usage.'"</p>';
  echo '<p>"'.$pays.'"</p>';
}elseif ($_POST['modele']=="alfa") {
  $voiture=new Alfa();
  if ($voiture->poids<='3,5') {
    $etat="voiture privée";
  }else {
    $etat="voiture utilitaire";
  }
  if ($voiture->kilometrage<"100.000") {
    $usage="low";
  }elseif ($voiture->kilometrage>'100.000' and $voiture->kilometrage<'200.000') {
    $usage="medium";
  }elseif ($voiture->kilometrage>'200.000') {
    $usage="high";
  }
 if (strpos($voiture->plaque, 'FR') ==false){
   $pays='France';
 }elseif (strpos($voiture->plaque, 'BE') ==false){
   $pays='Belgique';
 } else{
   $pays='Autre';
 }
  echo '<p>"'.$voiture->modele.'"</p>';
  echo '<p>"'.$voiture->statut.'"</p>';
  echo '<p>"'.$etat.'"</p>';
  echo '<p>"'.$usage.'"</p>';
  echo '<p>"'.$pays.'"</p>';
}elseif ($_POST['modele']=='renault') {
  $voiture=new Renault();
  if ($voiture->poids<='3,5') {
    $etat="voiture privée";
  }else {
    $etat="voiture utilitaire";
  }
  if ($voiture->kilometrage<"100.000") {
    $usage="low";
  }elseif ($voiture->kilometrage>'100.000' and $voiture->kilometrage<'200.000') {
    $usage="medium";
  }elseif ($voiture->kilometrage>'200.000') {
    $usage="high";
  }
  if (strpos($voiture->plaque, 'FR') ==false){
    $pays='France';
  }elseif (strpos($voiture->plaque, 'BE') ==true){
    $pays='Belgique';
  } else{
    $pays='Autre';
  }
  echo '<p>"'.$voiture->modele.'"</p>';
  echo '<p>"'.$voiture->statut.'"</p>';
  echo '<p>"'.$etat.'"</p>';
  echo '<p>"'.$usage.'"</p>';
  echo '<p>"'.$pays.'"</p>';
}

//$voiture=new Audi();

//echo $voiture->affiche_modele($modele);
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
