<?php
class Database{
  public function __construct($pdo){
    $this->pdo=$pdo;
  }
   public function getData(){
    $query=$this->pdo->prepare("SELECT * FROM `article`");
    $query->execute();
    return $query->fetchAll();
  }
  public function insert($username,$email,$password){
    $query=$this->pdo->prepare("INSERT INTO article(username,email,password) VALUES('$username','$email','$password')");
    $query->execute();
  }
  public function crypt($pwd){
    return password_hash($pwd, PASSWORD_DEFAULT);
  }
  public function select_datas($username){
    $query=$this->pdo->prepare("SELECT username, password FROM article Where username='$username' ");
    $query->execute();
    return $query->fetch();
  }
  public function decrypt($pwd,$hash){
    return password_verify($pwd,$hash);
  }
  public function session_start(){
    return session_start();
  }
  public function header(){
    return header('location:form-modify.php');
  }
  public function modify_username($new_name,$old_name){
    $query=$this->pdo->prepare("UPDATE article SET username=$new_name WHERE username=$old_name");
     return $query->execute();
  }
}
 ?>
