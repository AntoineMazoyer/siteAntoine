<?php

require_once('../public/templates/head.php');

require_once('../model/cv.php');

echo '<script src="../public/javascript/cv.js" type="text/javascript"></script>';
echo '<link href="../public/css/cv.css" rel="stylesheet" type="text/css"></link>';
echo '<link href="../public/css/footer.css" rel="stylesheet" type="text/css"/>';
echo '<link href="../public/medias/antoine.ico" rel="icon" type="image/png"></link>';

$title = "Mon CV";

require_once('../view/cv.php');