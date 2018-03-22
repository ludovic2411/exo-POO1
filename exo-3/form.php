<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'class-form-exo-3.php';
require 'validator.php';

$form=new Form();
$validator= new Validator();

if (isset($_POST['characters']) and isset($_POST['envoyer'])) {
$characters=$_POST['characters'];
$valid_text=$validator->filter_string($characters);
echo $valid_text;
}
if(isset($_POST['ponctuation']) and isset($_POST['envoyer'])){
$valid_ponctuation=$validator->valid_float($_POST['ponctuation']);
echo $valid_ponctuation;
}
//if(isset($_POST['number']) and isset($_POST['envoyer'])){
//$number=$_POST['number'];
//$valid_intr=$validator->valid_float($number);
//echo $valid_intr;

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>form</title>
   </head>
   <body>
<?php
echo $form->form_start('form_exo_3');
echo $form->label('numbers');
echo $form->input_text('number');
echo $form->label('characters');
echo $form->input_text('characters');
echo $form->label('ponctuation');
echo $form->input_text('ponctuation');
echo $form->submit();
 ?>
</form>
   </body>
 </html>
