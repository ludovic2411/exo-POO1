<?php
class Voiture{//on fixe les propriétés "fixes"
  private $modele='';
  public $statut='';
  public $poids='';
  public $plaque='';
  public $kilometrage='';
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function modele($modele){
    $this->modele=$this->modele=$modele;
  }
  public function affiche_modele(){
    echo $this->modele;
  }
public function drive(){
$this->kilometrage=$this->kilometrage +'250.000';
}
public function display($file,$alt){
  return '<table>
  <tr><td><img src='.$file.' alt='.$alt.'></td><td>"'.$this->modele.'"</td></tr>
  </table>';
}
}
 ?>
