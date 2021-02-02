<?php
$title = "Mise à jour";
ob_start();
?>

<?php
try{
  $user = "root";
  $pass = "";
  $bdd = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
  //debug
  $bdd-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

//Recuperation des champs remplis

$date_changement = htmlspecialchars(strip_tags($_POST['date_changement']));

$etage = htmlspecialchars(strip_tags($_POST['etage']));
 
$position_ampoule = htmlspecialchars(strip_tags($_POST['position_ampoule']));

$prix_ampoule = htmlspecialchars(strip_tags($_POST['prix_ampoule']));

$id= $_POST['id_ampoule'];

?>

<?php
$sql = "UPDATE ampoules
        SET date_changement = ?,
            etage = ?,
            position_ampoule = ?,
            prix_ampoule = ?
        WHERE id_ampoule = ?";

$update = $bdd->prepare($sql);

$update->bindParam(1, $date_changement);
$update->bindParam(2, $etage);
$update->bindParam(3, $position_ampoule);
$update->bindParam(4, $prix_ampoule);

$majvalid = $id;
//var_dump($majvalid);

$resultat = $update->execute(array($date_changement, $etage, $position_ampoule, $prix_ampoule, $majvalid));

if($resultat){
    $sql = "SELECT * FROM ampoules WHERE id_ampoule = ?";
    
    $requete = $bdd->prepare($sql);

    $maj = $id;

    $requete->bindParam(1, $maj);

    $requete->execute();

    $resultat = $requete->fetch();

}else{
    echo "Une erreur est survenue";
}

header('Location: http://localhost/ampoule/historique.php');

$content = ob_get_clean();
require "template.php";