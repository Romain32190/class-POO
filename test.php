<?php
require('pokemon.php');


//Pokemon feuille//
$Marisson = new Pokemon("Marisson",'60','Niveau Base','Fouet lianes','Canon graine');
$Marisson -> stats();

$Boguerisse = new Pokemon("Boguerisse", '90', 'Niveau 1', 'Vampigraine', 'Poing Dard');
$Boguerisse -> stats();

$Blindepique = new Pokemon('Blindepique', '150', 'Niveau 2', 'Poing Dard', 'Attaque trebuchante');
$Blindepique -> stats();

//Pokemon eau//

$Grenousse = new Pokemon('Grenousse', '60', 'Niveau Base', 'Ecras face', 'Goutte à goutte');
$Grenousse -> stats();

$Croaporal = new Pokemon('Croaporal', '80',  'Niveau 1', 'Goutte à goutte', 'Aqua-vague' );
$Croaporal -> stats();

//Pokemon feu//

$Feunnec = new Pokemon('Feunnec', '60', 'Niveau Base', 'Griffe', 'Charbon mutant' );
$Feunnec -> stats();

$Roussil = new Pokemon('Roussil', '80', 'Niveau 1', 'Souffle-feu', 'Queue de flammes');
$Roussil -> stats();

$Goupelin = new Pokemon('Goupelin', '140', 'Niveau 2', 'Feu follet', 'Deflagration');
$Roussil -> stats();





 ?>
