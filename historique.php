<?php
session_start();
$title = "Historique des ampoules";
ob_start();
try{
    $user = "root";
    $pass = "";
    $bdd = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
    //debug
    $bdd-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $exception){
    die("Error : " .$exception->getMessage());
}

//Titre de la page et bouton create
echo'<h1 class="text-center p-5">Historique des ampoules </h1>';

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouteProduit">
Ajouter une ampoule
</button>

<!-- Modal -->
<div class="modal fade" id="ajouteProduit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une ampoule</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <?php $sql = "INSERT INTO `ampoules` (`date_changement`, `etage`, `position_ampoule`, `prix_ampoule`) 
            VALUES (NULL, '', '', '', '')";
        ?>

<form action="ajouteAmpouleBack.php" method="POST">

  <div class="mb-3">
    <label>Date du changement</label>
    <input type="datetime-local" class="form-control" aria-describedby="emailHelp" name="date_changement" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Etage</label>
        <select class="form-select" aria-label="Default select example" class="form-control" name="etage" required>
        <option value="RDC">RDC</option>
          <option value="1 étage">1 étage</option>
          <option value="2 étage">2 étage</option>
          <option value="3 étage">3 étage</option>
          <option value="4 étage">4 étage</option>
          <option value="5 étage">5 étage</option>
          <option value="6 étage">6 étage</option>
          <option value="7 étage">7 étage</option>
          <option value="8 étage">8 étage</option>
          <option value="9 étage">9 étage</option>
          <option value="10 étage">10 étage</option>
          <option value="11 étage">11 étage</option>
        </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Position</label>
    <select class="form-select" aria-label="Default select example" class="form-control" name="position_ampoule" required>
        <option value="Gauche">Gauche</option>
        <option value="Droite">Droite</option>
        <option value="Fond">Fond</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Prix</label>
    <input type="text" class="form-control" name="prix_ampoule" required>
  </div>

  <div class="mb-3">
    <input type="hidden" class="form-control" name="nom_concierge" value="<?=$_SESSION['id_concierge']?>" required>
  </div>

    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-------------------------------------------Table historique ampoules----------------------------------------------------->
<table class="table table-striped">
    <thead>
        <tr>
            <th>Date de changement</th>
            <th>Etage</th>
            <th>Position</th>
            <th>Prix</th>
            <th>Concierge</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
            <!------AFFICHAGE DES PRODUIT ONE BY ONE----------->
    <?php
        $req = "SELECT * FROM ampoules INNER JOIN concierges ON concierges.id_concierge = ampoules.concierge_id ORDER BY date_changement DESC";
        $i = 0;
        foreach($bdd->query($req) as $row){

        $date_formater = new DateTime($row['date_changement']);
    
          if ($i++ == 5) break;
        
    ?>

    <tr>
        <td><?= $date_formater->format('d/m/Y à H:i')?></td>
        <td><?= $row['etage'] ?></td>
        <td><?= $row['position_ampoule'] ?></td>
        <td><?= $row['prix_ampoule'] ?> €</td>
        <td><?= $row['nom_concierge'] ?> </td>
                
    <!------------------------------------------ Button modal Supprimer ------------------------------------------------------------------->
<td>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#supprimeAmpoule<?= $row['id_ampoule'] ?>">
        Supprimer
    </button>   
</td>
<!-- Modal -->
<div class="modal fade" id="supprimeAmpoule<?= $row['id_ampoule'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supression d'une opération</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Etes vous sur de vouloir retirer l'ampoule ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <a href="delete.php?id_ampoule=<?= $row["id_ampoule"]?>" type="submit" class="btn btn-danger">Supprimer l'ampoule</a>
      </div>
    </div>
  </div>
</div>



<!---------------------------------------------------- Button modal détail ------------------------------------------------------------------>
<td>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail<?= $row['id_ampoule'] ?>">
        Détail
    </button>
</td>
<!-- Modal -->
<div class="modal fade" id="detail<?= $row['id_ampoule'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails de l'opération</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <li class="list-group-item"> Date du changement : <?= $date_formater->format('d/m/Y à H:i')?></li>
            <li class="list-group-item"> Etage : <?= $row['etage'] ?></li>
            <li class="list-group-item"> Position de l'ampoule : <?= $row['position_ampoule'] ?></li>
            <li class="list-group-item">Prix : <?= $row['prix_ampoule'] ?> €</li>
            <li class="list-group-item">Concierge : <?= $row['nom_concierge'] ?> </li>
        </ul>
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
  


<!-------------------------------------------------------- Button modal edit ------------------------------------------------------------------->
<td>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editAmpoule<?= $row['id_ampoule'] ?>">
        Editer
    </button>
</td>

<!-- Modal -->
<div class="modal fade" id="editAmpoule<?= $row['id_ampoule'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modification d'une opération</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

    <div class="modal-body">

<form action="editAmpoule.php" method="POST">

    <div class="mb-3">
        <label>Date du changement</label>
        <input type="datetime-local" class="form-control" aria-describedby="emailHelp" name="date_changement" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Etage</label>
        <select value="<?= $row["etage"]?>" class="form-select" aria-label="Default select example" class="form-control" name="etage" required>
            <option value="RDC">RDC</option>
            <option value="1 étage">1 étage</option>
            <option value="2 étage">2 étage</option>
            <option value="3 étage">3 étage</option>
            <option value="4 étage">4 étage</option>
            <option value="5 étage">5 étage</option>
            <option value="6 étage">6 étage</option>
            <option value="7 étage">7 étage</option>
            <option value="8 étage">8 étage</option>
            <option value="9 étage">9 étage</option>
            <option value="10 étage">10 étage</option>
            <option value="11 étage">11 étage</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Position</label>
        <select class="form-select" aria-label="Default select example" class="form-control" name="position_ampoule" required>
            <option value="Gauche">Gauche</option>
            <option value="Droite">Droite</option>
            <option value="Fond">Fond</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Prix</label>
        <input type="text" class="form-control" name="prix_ampoule" required>
    </div>

    <input type="hidden" name="id_ampoule" value="<?= $row["id_ampoule"]?>" />

    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
</tr>
    </tbody>

<?php
}
?>

</table>
   

<?php
$content = ob_get_clean();
require "template.php";
