<?php

use singleton\Singleton;

include './Singleton.php';

$a = Singleton::getInstance();
$b = Singleton::getInstance();

var_dump($a == $b);


?>