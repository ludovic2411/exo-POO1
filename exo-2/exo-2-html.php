<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'exo-2-html-class.php';

$html=new Html();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
   echo $html->meta_charset('utf-16');
   echo $html->meta_viewport_initial_scale();
   echo $html->link_css('exo-2-style.css');
   ?>
    <title>coucou</title>
  </head>
  <body>
<h1>Hello!</h1>
<?php
echo $html->img('/POO/exo-1/martine.png','martine');
echo $html->a_href('https://www.facebook.com/?stype=lo&jlou=Afdra3bHwO9aR6utOK_ov1ivecQCLNLromY5vp2GI78TFRUClrkNXdh8qKG-hhRDtS1NhKe05WPKen0UYLksD_nJ&smuh=5200&lh=Ac9aIXfqOdVC2pLK', 'Facebook');
 ?>
  </body>
</html>
