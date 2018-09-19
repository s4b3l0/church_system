<?php
/**
* 
*/
class ServiceClass
{	public $serviceID;
	public $sermon;
	public $serviceDate;
	public $seviceTime;
			
	function __construct($serviceID	,$sermon,$serviceDate,$serviceTime)
	{	
		$this->serviceID = $serviceID;
		$this->sermon = $sermon;
		$this->serviceDate = $serviceDate;
		$this->serviceTime=$serviceTime;
	}
}