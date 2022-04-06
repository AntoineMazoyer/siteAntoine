<?php

require_once('../public/templates/head.php');
echo '<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dosis:wght@500&display=swap" rel="stylesheet">';
echo '<script src="../public/javascript/home.js" type="text/javascript"></script>';
echo '<link href="../public/css/home.css" rel="stylesheet" type="text/css"></link>';
echo '<link href="../public/css/footer.css" rel="stylesheet" type="text/css"/>';
echo '<link href="../public/medias/antoine.ico" rel="icon" type="image/png"></link>';
// require_once('../public/templates/navbar.php');
require_once('../model/home.php');

$title = "Accueil";

require_once('../view/home.php');