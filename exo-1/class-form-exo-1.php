<?php
class Form{
  //public $radio_name='radio';
  //public $checkbox_name='checkbox';
  private $datas;
  public $paragraph='p';

  public function __construct($datas=array()){
    $this->datas=$datas;
  }

public function paragraph($html){

  return "<{$this->paragraph}>{$html}</{$this->paragraph}";
}

  private function getValue($index){
    return isset($this->datas[$index]) ? $this->datas[$index] : null;
  }
public function label($blabla){
  return '<label for="'.$blabla.'">"'.$blabla.'"</label>';
}
  public function input_text($blabla){

return '<p><input type="text" name="'.$blabla.'" value=""></p>';

  }
public function form_start($blabla){
  return '<form name="'.$blabla.'" action="#" method="post">';
}
public function input_textarea($blabla){

  return '<p><input type="textarea" name="'.$blabla.'" value=""></p>';

}
public function input_select_start($blabla){
  return '<p><select name="'.$blabla.'"></p>';
}
public function option_select($blabla){
  echo '<option value="'.$blabla.'">"'.$blabla.'"</p>';
}
public function input_select_end(){
  echo '</select>';
}
public function input_radio($blabla){
  return '<p><input type="radio" name="radio" value="'.$blabla.'">"'.$blabla.'"</p>';
}
public function input_checkbox($blabla){
  return '<p><input type="checkbox" name="checkbox" value="'.$blabla.'">"'.$blabla.'"</p>';
}
public function submit(){
  echo "<p><input type='submit' value='envoyer'></p>";
}
}
