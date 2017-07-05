<?php
require('pokemon.php');


//Pokemon feuille//
$Marisson = new Pokemon("Marisson",'60','Niveau Base','Fouet lianes 10','Canon graine 20');
$Marisson -> stats();

$Boguerisse = new Pokemon("Boguerisse", '90', 'Niveau 1', 'Vampigraine 20', 'Poing Dard 50');
$Boguerisse -> stats();

$Blindepique = new Pokemon('Blindepique', '150', 'Niveau 2', 'Poing Dard 50', 'Attaque trebuchante 80+');
$Blindepique -> stats();

//Pokemon eau//

$Grenousse = new Pokemon('Grenousse', '60', 'Niveau Base', 'Ecras face 10', 'Goutte à goutte 20');
$Grenousse -> stats();

$Croaporal = new Pokemon('Croaporal', '80',  'Niveau 1', 'Goutte à goutte 20', 'Aqua-vague 40+' );
$Croaporal -> stats();

//Pokemon feu//

$Feunnec = new Pokemon('Feunnec', '60', 'Niveau Base', 'Griffe 10', 'Charbon mutant 20' );
$Feunnec -> stats();

$Roussil = new Pokemon('Roussil', '80', 'Niveau 1', 'Souffle-feu 20+', 'Queue de flammes 60');
$Roussil -> stats();

$Goupelin = new Pokemon('Goupelin', '140', 'Niveau 2', 'Feu follet 30', 'Deflagration 120');
$Goupelin -> stats();

$pokemons = [$Boguerisse, $Blindepique, $Grenousse, $Croaporal, $Feunnec, $Roussil, $Goupelin];






 ?>
