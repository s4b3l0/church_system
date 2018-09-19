<?php
include_once 'Model/SeviceModel.php';
include_once 'Model/Sermon.php';
include_once 'Model/serviceObj.php';

class serviceControl
{ 	
	Public $sermonModel;
	Public	$serviceModel;
	
		function __construct()
		{
			$this->serviceModel= new Service();
		}
		Public function showService()
		{
                      if(isset($_GET['sermon'])){
                    $val=filter_input(INPUT_GET,'sermon',FILTER_SANITIZE_STRING);} else {
                        $val='%';
                        }
                        
                        
                        
			$sermon=$this->serviceModel->getSermon();
                       
                        $service=$this->serviceModel->getService($val);
                        
                      
                        
			
			
			require_once 'View/ServicesReport.php';
		}
		Public function AddService()
		{
		//	$sermon=$this->serviceModel->getSermon();
			$cont='services';
			$act='AddService';
			$type='Date';
			if (isset($_GET['Submit'])) {
				$sermon=$_GET['sermon'];
				$serviceDate=$_GET['Date'];
				$serviceTime=$_GET['time'];
				$service=$this->serviceModel->insertService($sermon,$serviceDate,$serviceTime);

			}
			$state='';
			$sermon=$this->serviceModel->getSermon();
			require_once 'View/AddService.php';

		}
		Public function AddSunday(){

			$cont='services';
			$act='AddSunday';
			$state='hidden';
			$date=$this->serviceModel->getNextSunday();
			if(isset($_GET['Submit']) && isset($_GET['sermon'])){
				$sermon=$_GET['sermon'];
				$serviceTime=$_GET['time'];
				$service=$this->serviceModel->insertService($sermon,$date,$serviceTime);
			}
			
			$sermon=$this->serviceModel->getSermon();
			require_once 'View/AddService.php';

		}


}



