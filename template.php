<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?=$title?></title>

</head>
<body>

<head>



    <nav class="navbar navbar-light bg-light  mb-5">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="historique.php">Historique des ampoules</a>
      <a class="nav-link fw-bold" href="deconnexion.php">Deconnexion</a>
  </div>
</nav>
</head>

<div class="container">
<?= $content ?>

</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>