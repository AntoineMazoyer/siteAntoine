<?php

$date_naissance = new DateTime("1996-07-13");
$date_du_jour = new DateTime('now');
$mon_age = $date_du_jour->diff($date_naissance)->format("%Y");