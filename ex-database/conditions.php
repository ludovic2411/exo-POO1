<?php

require_once 'config.php';
require_once 'database-class.php';
require_once 'user-class.php';
require_once 'sanitizer-class.php';
require_once 'conditions.php';
require_once 'form.php';

$form=new Form();
$sanitizer=new Sanitizer();
$db=new Database($pdo);
$user=new User();
if (!empty($_POST['username'])){
  $username=$_POST['username'];
  $username_clean=$sanitizer->sanitize_string($username);
  //echo $user->username;
  //echo $username_clean;
}
 if(!empty($_POST['email'])){
  $user_mail=$_POST['email'];
  $user_mail_clean=$sanitizer->sanitize_email($user_mail);
  //echo $user->email;
  //echo '<p>'.$user_mail_clean.'</p>';
}
if (!empty($_POST['password'])){
  $user_password=$_POST['password'];
  $user_password_clean=$sanitizer->sanitize_string($user_password);
  $user_password_safe=$db->crypt($user_password_clean);
  //echo $user->password;
  //echo '<p>'.$user_password_safe.'</p>';
  $insert=$db->insert($username_clean,$user_mail_clean,$user_password_safe);
}
////partie sign in
if (!empty($_POST['username_log'])){
  $user_log=$_POST['username_log'];
  $user_log_clean=$sanitizer->sanitize_string($user_log);
  $user->update_username($user_log_clean);
  //echo $user->username;
}
if(!empty($_POST['email_log'])){
  $email_log=$_POST['email_log'];
  $email_log_clean=$sanitizer->sanitize_email($email_log);
  $user->update_email($email_log_clean);
  //echo $user->email;
}
if(!empty($_POST['password_log'])){
  $password_log=$_POST['password_log'];
  $password_log_clean=$sanitizer->sanitize_string($password_log);
  $user->update_password($password_log_clean);
  //echo $user->password;
  $infos_valides=$db->select_datas($user_log);
  //$infos_valides=$db->query("SELECT username, password FROM article WHERE username='".$_POST['username_log']."'");
  //echo $infos_valides['username'];
  $hash=$infos_valides['password'];
  $decrypt=$db->decrypt($_POST['password_log'],$hash);
  if ($_POST['username_log']==$infos_valides['username'] and $decrypt==$_POST['password_log']){
    $db->session_start();
    $_SESSION['username']=$user_log_clean;
    $_SESSION['password']=$password_log_clean;
    $_SESSION['email']=$email_log_clean;
    $db->header();
  }else {
    echo "pas ok";
  }
  }
////modifications des données
if (!empty($_POST['username_modify']) and isset($_SESSION['username'])) {
  $new_username=$_POST['username_modify'];
  $new_username_clean=$sanitizer->sanitize_string($new_username);
  $db->modify_username($new_username_clean,$_SESSION['username']);
}else {
  echo "fail";
}
 ?>
