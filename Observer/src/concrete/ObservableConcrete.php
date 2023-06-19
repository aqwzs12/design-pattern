<?php 

namespace App\concrete;

use App\interfaces\ObservableInterface;
use App\interfaces\ObserverInterface;

class ObservableConcrete implements ObservableInterface {

    private $observer = [];
    private $data;
    
    public function attach(ObserverInterface $observer): void {
        $this->observer[] = $observer;
    }

    public function detach(ObserverInterface $observer): void {
        foreach($this->observer as $k => $v) {
            if ($v === $observer) unset($this->observer[$k]);
        }
    }

    public function notify() {
        foreach($this->observer as $observer) {
            $observer->update($this->data);
        }
    }

    public function setData($data) {
       $this->data = $data;
       $this->notify();
    }
}