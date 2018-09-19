<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author Sabelo
 */
class Member {
    public  $initials;
    public $surname;
    public $address;
    public $phone;
    public $email;
    public $said;
    public $birthdate;
    Public $member_id;




    // public $username;
   // public $password;
    
    public function __construct($initials, $surname, $address, $phone, $email, $said, $birthdate,$member_id) {
        $this->initials = $initials;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->said = $said;
        $this->birthdate = $birthdate;
        $this->member_id =$member_id;
        //$this->username = $username;
        //$this->password = $password;
        
    }

}
