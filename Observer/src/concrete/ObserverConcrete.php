<?php 

namespace App\concrete;

use App\interfaces\ObserverInterface;

class ObserverConcrete implements ObserverInterface {

    public function update($data) {
        echo "the new data is ". $data . PHP_EOL;
    }
}