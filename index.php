<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Connexion</title>

</head>
<body>
<div id="user_form">
<section>

<h1 class="text-center p-3">Ampoules</h1>

<div id="form-color" class="container bg-light border rounded p-5 Regular shadow">

<h2 class="pb-5">Créer un compte</h2>
<form action="login.php" method="post">

    <div class="mb-3">
        <label for="name" class="form-label">Nom d'utilisateur( 4 à 20 lettres)</label>
        <input type="text" id="name" class="form-control" name="name_concierge" placeholder="Nom" minlength="4" maxlength="20" required>
    </div>

    <div class="mb-3">
        <label for="inputPassword" class="form-label">Mot de passe</label>
        <input name="password_concierge" type="password" class="form-control" id="inputPassword" required>        
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>

    </form>
</div>

</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> 
</body>