<?php
$title = "Produit supprimer";
ob_start();

$id = $_GET['id_ampoule'];

//var_dump($id);

try{
    $user = "root";
    $pass = "";
    $bdd = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
    //debug
    $bdd-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// sql to delete a record
$sql = "DELETE FROM ampoules WHERE id_ampoule = $id";

// use exec() because no results are returned
$bdd->exec($sql);
echo "Produit supprimer";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$bdd = null;


header('Location: http://localhost/Projet-ampoule/historique.php');


$content = ob_get_clean();
require "template.php";
