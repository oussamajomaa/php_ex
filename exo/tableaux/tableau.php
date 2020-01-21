<?php
$tab = array(15,22);
$tabCrochets = [15,22];
var_dump($tab);
var_dump($tabCrochets);
$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

// for ( $i=0; $i<count($jours); $i++){
//     echo $jours[$i]."<br>";
// }

// Display array content
foreach($jours as $jour){
    echo $jour.'<br>';
}


echo $jours[3].'<br>';
// Add an element to an array
array_push($jours,'Dimanche');

$jours[]=('Dimanche');

foreach($jours as $jour){
    echo $jour.'<br>';
}

// remove an element in an array
unset($jours[7]);

foreach($jours as $jour){
    echo $jour.'<br>';
}

print_r($jours);
echo '<br>';
unset($jours[array_search('Jeudi',$jours)]);

print_r($jours);
echo '<br>';

//remove the first element from an array 
$result=array_shift($jours);
//the deleted element
print_r($result);
echo '<br>';
//the new array after 
print_r($jours);
echo '<br>';


?>