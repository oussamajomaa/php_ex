<?php
$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");

$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");
$preferences = array();



$preferences[0]= $pierre;
$preferences[1]= $paul;
$preferences[2]= $jacques;
var_dump($preferences);

$preferences['pierre']=$preferences[0];
unset($preferences[0]);
$preferences['paul']=$preferences[1];
unset($preferences[1]);
$preferences['jacques']=$preferences[2];
unset($preferences[2]);
var_dump($preferences);

print_r($preferences);

$activites["Dimanche"]="rien";



echo"<br>";
$preferences=array_merge($pierre,$paul,$jacques);

echo"<br>";

var_dump(array_count_values($preferences));

echo"<br>";
print_r($preferences);

?>