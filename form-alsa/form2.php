<?php
class Form{

  private $data;
  public $surround = 'p';

  public function __construct($data = array()){

  $this->data = $data;
}

private function surround($html){
  return "<{$this->surround}>{$html}</{$this->surround}>";
}

private function getValue($index){
  return isset($this->data[$index]) ? $this->data[$index] : null;
}

public function input($username){
  return $this->surround(
    '<input type="text" name="'.$username.'" value="'.$this->getValue($username).'">');

}

public function submit(){
  echo '<button type="submit">Send</button>';
}

}
 ?>
