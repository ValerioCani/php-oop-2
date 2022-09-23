<?php
require_once __DIR__ .'./Users.php';

class Realtor extends Users{
    public $badgeNumber;

    public function __construct($badgeNumber)
    {
        $this->badgeNumber = $badgeNumber;
    }
}