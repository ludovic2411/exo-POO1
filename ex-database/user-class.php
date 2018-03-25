<?php
class User{
  public $id='';
  public $username='';
  public $email='';
  public $password='';
  public $statut='';

  public function update_username($data){
    return $this->username=$this->username="$data";
  }
  public function update_email($data){
    return $this->email=$this->email="$data";
}
public function update_password($data){
  return $this->email=$this->password="$data";
}
}
 ?>
