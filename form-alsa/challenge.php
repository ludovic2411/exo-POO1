<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


try {
  //$bd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', 'user');//localhost/linux
  $bd = new PDO('mysql:host=localhost;dbname=challenge;charset=utf8', 'root', 'root');//localhost/mac

  //$bd = new PDO('mysql:host=localhost;dbname=id4745934_chat;charset=utf8', 'id4745934_ludovic', 'user@');//webhost
} catch (Exception $e) {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}
function affiche($challenge, challenge1){
  $challenge=$bd->query("SELECT * FROM challenge");
  $challenge1=$challenge->fetch();
echo $challenge1['contenu'];
 ?>
