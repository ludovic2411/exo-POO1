<?php
class Alfa{//on fixe les propriétés "fixes"
  private $modele="alfa Giulietta";
  public $statut="free";
  public $poids="1,8";
  public $plaque="FR43";
  public $kilometrage="150.000";
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function affiche_modele(){
    echo $this->modele;
  }
    public function display(){
      return '<table>
      <tr><td><img src="class-voitures/Giulietta.jpg" alt="Giulietta"></td><td>"'.$this->modele.'"</td></tr>
      </table>';
  }

}
 ?>
