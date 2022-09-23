<?php
require_once __DIR__ .'../traits.php';

class Properties {

    use Address;

    protected $price = null;
    protected $rent = null;    
    
    public function __construct($price, $rent, $address)
    {
        $this->price = $price;
        $this->rent = $rent;
        $this->address = $address;

    }
}