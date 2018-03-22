<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "class-form-exo-1.php";

$form= new Form(array());
$select=$_POST['select'];
echo $select;
?>
<?php
echo $form->form_start('form');
echo $form->label('text');
echo $form->input_text('text');
echo $form->input_textarea('textarea');
echo $form->input_select_start('select');
echo $form->option_select('vanille');
echo $form->option_select('framboise');
echo $form->option_select('fraise');
echo $form->input_select_end();
echo $form->input_radio('hi');
echo $form->input_checkbox('check');
echo $form->submit();
?>
</form>
