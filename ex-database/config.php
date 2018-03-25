<?php
//données de configuration de la base de donnéelse
$host='localhost';
$db_name='challenge';
$charset='utf-8';
$db_username='root';
$db_pwd='root';
try
   {
       $pdo = new PDO('mysql:host=localhost;dbname=challenge;charset=utf8', 'root', 'root');
   }
   catch (PDOException $e)
   {
       exit('Error Connecting To DataBase');
   }
 ?>
