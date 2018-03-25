<?php
require_once 'class-form.php';
require_once 'class-voiture.php';
require_once 'conditions.php';
require_once 'sanitizer-class.php';
$sanitizer= new Sanitizer();
$form= new Form();
$car=new Voiture();

$choix=$_POST['modele'];
$modele=$sanitizer->sanitize_string($choix);
if (isset($_POST['modele'])) {
  $car->modele($modele);
  $car->affiche_modele();
}
if ($modele=='audi') {
  $car->statut='reserved';
  echo '<p>'.$car->statut.'';
}else {
  $car->statut='free';
  echo '<p>'.$car->statut.'';
}
if ($modele=='audi'){
  $car->poids='2';
  $car->plaque='DE';
  $car->kilometrage='150.000';
}elseif ($modele=='alfa') {
  $car->poids='1,5';
  $car->plaque='FR';
  //$car->drive();
  $car->kilometrage='90.000';
}elseif ($modele=='fiat') {
  $car->poids='1,2';
  $car->plaque='FR';
  $car->kilometrage='30.000';
}else {
  $car->poids='4';
  $car->plaque='BE';
  $car->kilometrage='220.000';
}
if ($car->poids<='3,5') {
  $etat="voiture privée";
}else {
  $etat="voiture utilitaire";
}
if ($car->kilometrage<"100.000") {
  $usage="low";
}elseif ($car->kilometrage>'100.000' and $car->kilometrage<'200.000') {
  $usage="medium";
}elseif ($car->kilometrage>'200.000') {
  $usage="high";
}
if ($car->plaque=='DE') {
  $pays='Allemagne';
}elseif ($car->plaque=='BE') {
  $pays='Belgique';
}else {
  $pays='France';
}
echo '<p>'.$etat.'</p>';
echo '<p>'.$usage.'</p>';
echo '<p>'.$car->kilometrage.'</p>';
echo '<p>'.$pays.'</p>';
if ($modele=='audi') {
echo $car->display('audi-s5.jpg','audi-s5');
}elseif ($modele=='fiat') {
  echo $car->display('fiat-500.jpg','fiat-500');
}elseif ($modele=='alfa') {
  echo $car->display('Giulietta.jpg','Giulietta');
}elseif($modele=='renault'){
  $car->display('renault-passenger.jpg','renault-passenger');
}
 ?>
