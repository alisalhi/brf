<?php
$t_departements = array(); 
$t_departements['02'] = 'Aisne';
$t_departements['59'] = 'Nord';
$t_departements['60'] = 'Oise';
$t_departements['62'] = 'Pas-de-Calais';
$t_departements['80'] = 'Somme';
foreach($t_departements as $dep => $ville){
    print_r ("Le département".' '.$ville.' '."a le numéro".' '.$dep ."<br>");
    }
?>
