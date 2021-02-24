<?php
$title = "Ajouter";
ob_start();
?>
<?php

$date =htmlspecialchars($_POST['date_changement']);
$etage = htmlspecialchars($_POST['etage']);
$position = htmlspecialchars($_POST['position_ampoule']);
$prix = htmlspecialchars($_POST['prix_ampoule']);

$name = $_POST['nom_concierge'];
var_dump($name);

try{
    $user = "root";
    $pass = "";
    $bdd = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
    //debug
    $bdd-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO ampoules (date_changement, etage, position_ampoule, prix_ampoule, concierge_id)
  VALUES ('$date', '$etage', '$position', '$prix', '$name')";

$bdd->exec($sql);
  

}catch(PDOException $exception){
    die("Error : " .$exception->getMessage());
}


header('Location: http://localhost/Projet-ampoule/historique.php');

$content = ob_get_clean();
require "template.php";
?>