<?php

require_once('../public/templates/head.php');

echo '<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dosis:wght@500&display=swap" rel="stylesheet">';
echo '<script src="../public/javascript/projects.js" type="text/javascript"></script>';
echo '<link href="../public/css/projects.css" rel="stylesheet" type="text/css"></link>';
echo '<link href="../public/medias/antoine.ico" rel="icon" type="image/png"></link>';
require_once('../model/projects.php');

$title = "Projets";

require_once('../view/projects.php');