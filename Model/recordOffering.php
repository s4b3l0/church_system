 <?php

class recordOffering {
	public $service_id;
        public $service;
        public $offeringType;
        public $Amount;
    
    
    public function _construct($service, $offeringType, $Amount)
    {
        $this->service = $service;
        $this->offeringType =$offeringType;
        $this->Amount =$Amount;
    }
   
}
