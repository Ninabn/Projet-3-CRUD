<?php
$title = "Ajouter";
ob_start();
?>
<?php

$date =htmlspecialchars($_POST['date_changement']);
$etage = htmlspecialchars($_POST['etage']);
$position = htmlspecialchars($_POST['position_ampoule']);
$prix = htmlspecialchars($_POST['prix_ampoule']);

try{
    $user = "root";
    $pass = "";
    $bdd = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
    //debug
    $bdd-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO ampoules (date_changement, etage, position_ampoule, prix_ampoule)
  VALUES ('$date', '$etage', '$position', '$prix')";

$bdd->exec($sql);
  echo "";

}catch(PDOException $exception){
    die("Error : " .$exception->getMessage());
}


header('Location: http://localhost/ampoule/historique.php');

$content = ob_get_clean();
require "template.php";
?>