<?php
require_once __DIR__ .'../traits.php';

class Client extends Users{

    use Address;

    public $clientID;

    
    public function __construct($clientID)
    {
        $this->clientID = $clientID;
    }
}