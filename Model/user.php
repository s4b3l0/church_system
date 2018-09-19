<?php

class User {
    Public $username;
    Public $initials;
    public $surname;
    public $address;
    public $phone;
    public $email;
    
public function __construct($initials,$surname,$address,$phone,$email,$username) {
$this->initials = $initials;
$this->surname =$surname;
$this->address = $address;
$this->phone = $phone;
$this->email = $email;
$this->username = $username;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------
}






