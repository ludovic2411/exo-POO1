<?php
class Renault{//on fixe les propriétés "fixes"
  private $modele="Renault utilitaire";
  public $statut="free";
  public $poids="4";
  public $plaque="BE55";
  public $kilometrage="26.000";
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function affiche_modele(){
    echo $this->modele;
  }
  public function display(){
    return '<table>
    <tr><td><img src="class-voitures/renault-passenger.jpg" alt="Giulietta"></td><td>"'.$this->modele.'"</td></tr>
    </table>';
  }
}
 ?>
