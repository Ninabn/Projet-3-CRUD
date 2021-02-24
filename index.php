<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Connexion</title>

</head>
<body>
<div id="user_form">
<section>

<h1 class="text-center p-3">Historique : ampoules</h1>

<div id="form-color" class="container bg-light border rounded p-5 Regular shadow">

<div class="text-center">
    <h2><i class="fa fa-user fa-3x" aria-hidden="true"></i></h2>
    <h3 class="pb-3">Se connecter</h3>
</div>

<form action="login.php" method="post">

    <div class="mb-3">
        <label for="name" class="form-label">Nom d'utilisateur( 4 à 20 lettres)</label>
        <input type="text" id="name" class="form-control" name="name_concierge" placeholder="Pierre Lumière" minlength="4" maxlength="20" required>
    </div>

    <div class="mb-3">
        <label for="inputPassword" class="form-label">Mot de passe</label>
        <input name="password_concierge" type="password" class="form-control" placeholder="1234" id="inputPassword" required>        
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-dark">Se connecter</button>
    </div>

    </form>
</div>

</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> 
</body>