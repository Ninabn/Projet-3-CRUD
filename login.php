<?php
try{
    $user = "root";
    $pass = "";
    $bdd = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
    //debug
    $bdd-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// use exec() because no results are returned

echo "Connecter";
} catch(PDOException $e) {
echo $sql . "<br>Erreur" . $e->getMessage();
}

$sql = "SELECT nom_concierge, password_concierge, id_concierge  FROM concierges";
foreach($bdd->query($sql) as $row){

$name = $_POST['name_concierge'];
$pass = $_POST['password_concierge'];

if (!empty($name) && !empty($pass)) {

    if($name === $row['nom_concierge'] && $pass === $row['password_concierge']){

        session_start();
        $_SESSION['password'] = $row['password_concierge'];
        $_SESSION['name'] = $row ['nom_concierge'];
        $_SESSION['id_concierge'] = $row ['id_concierge'];
        var_dump($_SESSION['id_concierge']);
        header('Location: http://localhost/Projet-ampoule/historique.php');
        
    }else{
        echo "<a href='index.php' class='btn btn-danger'>Retour</a>";
    }
}else{
    echo "Les champs n'ont pas été remplit";
    echo "<a href='index.php' class='btn btn-danger'>Retour</a>";
}

}

?>