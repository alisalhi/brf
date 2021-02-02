<?php
$t_departements = array(
'02' => 'Aisne',
'59' =>'Nord',
'60' => 'Oise',
'62' => 'Pas-de-Calais',
'80' => 'Somme');
$t_departements[51] = 'Riems';
Ksort($t_departements);
print_r($t_departements);

?>
