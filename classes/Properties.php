<?php
require_once __DIR__ .'../traits.php';

class Properties {

    use Address;

    public $price = null;
    public $rent = null;    
    
    public function __construct($price, $rent, $address)
    {
        $this->price = $price;
        $this->rent = $rent;
        $this->address = $address;

    }
}