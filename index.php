<?php

// teste la class Humain
require_once 'Humain.php';
$jean = new Humain(1.85,77);
$jane = new Humain(1.71,63);
$tom = new Humain(1.82,83);

var_dump($jean);


//var_dump($jean,$jane,$tom);
// 3 maniére 
//echo "jean messure $jean->taille et pèse  $jean->poids";
//echo "jean messure". $jean->taille." et pèse " .$jean->poids;
echo "<p>jean messure {$jean-> getTaille()}m et pèse  {$jean->getPoids()}kg</p>";


?>