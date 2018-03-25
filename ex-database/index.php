<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
//$rows=$db->getData();
 //foreach ($rows as $rows_fetch){
   //echo '<p>'.$rows_fetch['username'].''.$rows_fetch['email'].'</p>';
 //}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>database</title>
  </head>
  <body>
    <h1>Bonjour</h1>
    <section>
<?php
echo $form->form_start('register');
echo $form->label('username');
echo $form->input_text('username');
echo $form->label('email');
echo $form->input_email('email');
echo $form->label('password');
echo $form->input_password('password');
echo $form->submit('envoyer');
    ?>
  </section>
  <h2>Re-bonjour</h2>
  <section>
    <?php
echo $form->form_start('login');
echo $form->label('username');
echo $form->input_text('username_log');
echo $form->label('email');
echo $form->input_email('email_log');
echo $form->label('password');
echo $form->input_password('password_log');
echo $form->submit('login');
     ?>
  </section>
  </body>
</html>
