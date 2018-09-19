<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rank
 *
 * @author Sabelo
 */
class Rank {
    //put your code here
    public $rankid;
    public $description;
    
    function __construct($rankid, $description) {
        $this->rankid = $rankid;
        $this->description = $description;
    
    }
    
}
