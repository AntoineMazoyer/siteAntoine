<?php

require_once('../public/templates/head.php');
echo '<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dosis:wght@500&display=swap" rel="stylesheet">';
echo '<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">';
echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
echo '<link href="../public/css/skills.css" rel="stylesheet" type="text/css"/>';
echo '<script src="../public/javascript/skills.js" type="text/javascript"></script>';
echo '<link href="../public/css/footer.css" rel="stylesheet" type="text/css"/>';
echo '<link href="../public/medias/antoine.ico" rel="icon" type="image/png"></link>';

$title = "Compétences";

require_once('../view/skills.php');