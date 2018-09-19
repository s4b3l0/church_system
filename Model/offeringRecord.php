<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of offeringRecord
 *
 * @author Thabiso
 */
class offeringRecord {
    public $sermon_title;
    public $service_date;
    public $offerAmount;
    public $totAmount;
    
    function __construct($sermon_title, $service_date, $offerAmount, $totAmount) {
        $this->sermon_title = $sermon_title;
        $this->service_date = $service_date;
        $this->offerAmount = $offerAmount;
        $this->totAmount = $totAmount;
    }

}
