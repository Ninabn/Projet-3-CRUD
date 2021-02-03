<?php
session_start();

//On detruit les variables de session
session_unset();

//Destruire la session
session_destroy();

header("Location: http://localhost/Projet-ampoule/");