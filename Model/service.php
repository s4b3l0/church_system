<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of service
 *
 * @author Student
 */
class service {
    public $service_id;
    public  $sermon_title;
    
    function __construct($service_id, $sermon_title) {
        $this->service_id = $service_id;
        $this->sermon_title = $sermon_title;
        
        
    }

}
