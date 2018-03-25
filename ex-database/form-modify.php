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
$db->session_start();
echo '<p>'.$_SESSION['username'].'</p>';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2>Modifiez vos données</h2>
     <section>
   <?php
   echo $form->form_start('modify');
   echo $form->label('new_username');
   echo $form->input_text('username_modify');
   echo $form->label('new_email');
   echo $form->input_email('email_modify');
   echo $form->label('new_password');
   echo $form->input_password('password_modify');
   echo $form->submit('modify');
    ?>
     </section>
   </body>
 </html>
