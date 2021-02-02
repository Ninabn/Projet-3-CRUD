<?php
$title = "Inscription";

ob_start();
?>

<div style="display: flex; justify-content: center;">
<section id="user_form">

<h1 class="text-center">Ampoule</h1>

<div class="container">

<h2>Créer un compte</h2>
<form action="inscription.php" method="post">
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input name="email_user" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nom d'utilisateur( 4 à 8 lettres)</label>
        <input type="text" id="name" class="form-control" name="name_user" placeholder="Nom" minlength="4" maxlength="8" required>
    </div>

    <div class="mb-3">
        <label for="inputPassword" class="form-label">Mot de passe</label>
        <input name="password_user" type="password" class="form-control" id="inputPassword" required>        
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">S'inscrire</button>
        <a href="login.php" type="button" class="btn btn-secondary">Se connecter</a>
    </div>

    </form>
</div>

</section>
</div>


<?php
$content = ob_get_clean();
require "template.php";
