<?php
class Form{
private $data;
public $surround='p';

public function __construct($data=array()){

$this->data=$data;

}

private function surround($html){

return "<{$this->surround}>{$html}</{$this->surround}>";

}

private function getValue($index){

return isset($this->data[$index]) ? $this->data[$index] : null;
//  return $this->data[$index];
}

public function input($username){

return  $this->surround('<input type="text" name="'.$username.'" value="'.$this->getValue($username).'">');
}
  //return $this->surround('<input type="password" name="password" value="password">');
//}
public function submit(){
  echo "<input type='submit' value='envoyer'>";
}

}
