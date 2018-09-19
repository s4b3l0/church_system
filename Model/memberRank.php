<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of memberRank
 *
 * @author Thabiso
 */
class memberRank {
    public $member_name;
    public $member_id;
    
    
           
    function __construct($member_name, $member_id) {
        $this->member_name = $member_name;
        $this->member_id = $member_id;
        
    }


}
