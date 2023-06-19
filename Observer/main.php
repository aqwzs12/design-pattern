<?php

use App\concrete\ObservableConcrete;
use App\concrete\ObserverConcrete;

require_once './vendor/autoload.php';


$observable = new ObservableConcrete();
$observer1 = new ObserverConcrete();
$observer2 = new ObserverConcrete();

$observable->attach($observer1);
$observable->attach($observer2);
$observable->setData("DATA 1");
$observable->setData("DATA 2");
$observable->detach($observer2);
$observable->setData("DATA 3");



?>