<?php



class offering {
   
    public $offeringType;
    public $type_id;
    // public $amount;
    
    function __construct($offeringType, $type_id) {
        $this->offeringType = $offeringType;
        $this->type_id = $type_id;
    }


}