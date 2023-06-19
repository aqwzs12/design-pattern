<?php 
require './vendor/autoload.php';
use Factory\PersonneFactory;

$data = [
    ['test','test',25],
    ['test1','test1',26],
    ['test2','test2',25],
    ['test3','test3',25],
];

$factory = new PersonneFactory();
foreach($data as $v) {
    $personne = $factory->createPersonne($v[0],$v[1],$v[2]);
    echo $personne . PHP_EOL;
}



?>