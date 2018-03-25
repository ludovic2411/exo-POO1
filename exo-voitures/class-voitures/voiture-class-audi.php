<?php
class Audi{//on fixe les propriétés "fixes"
  private $modele="audi";
  public $statut="reserved";
  public $poids="3,6";
  public $plaque="DE21";
  public $kilometrage="98000";
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function affiche_modele(){
    echo $this->modele;
  }
public function drive(){
  $this->kilometrage=$this->kilometrage +"150000";
}
public function display(){
  return '<table>
  <tr><td><img src="class-voitures/audi-s5.jpg" alt="Giulietta"></td><td>"'.$this->modele.'"</td></tr>
  </table>';
}
}
 ?>
