<?php 

namespace App\concrete;

use App\interfaces\ObservableInterface;
use App\interfaces\ObserverInterface;

class ObservableConcrete implements ObservableInterface {

    private $observer = [];
    private $data;
    
    public function attach(ObserverInterface $observer):never {
        $this->observer[] = $observer;
    }

    public function detach(ObserverInterface $observer): never {
        $index = array_search($observer,$this->$observer);
           if( $index !== FALSE) {
            unset($this->observer[$index]);
           } 
    }

    public function notify(): never {
        foreach($this->observer as $observer) {
            $observer->update($this->data);
        }
    }

    public function setData($data) {
       $this->data = $data;
       $this->notify();
    }
}