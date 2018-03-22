<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "form.php";

$form= new Form($_POST);
 ?>
<form class="" action="#" method="post">
  <?php
  echo $form->input('username');
  echo $form->input('password');
  echo $form->submit();
  ?>
</form>
