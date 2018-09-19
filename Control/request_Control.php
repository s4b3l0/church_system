
<?php 
/**
*@author sabelo
*/
include_once "Model/Request.php";
include_once "Model/RequestModel.php";
class requestControl{
	public $reqModel;
	function __construct()
	{
	 $this->reqModel = new requestModel();
	}
function makeRequest()
	{   
		//$memid = $this->reqModel->getId($_SESSION['user']);
		
		require "View/requestDetails.php";
		if (isset($_GET['date'])&&isset($_GET['subject'])&&isset($_GET['desc'])){
	 
		 	$reqDate = filter_input(INPUT_GET,'date',FILTER_SANITIZE_STRING)?filter_input(INPUT_GET,'date'):'';
			$reqSubject = filter_input(INPUT_GET,'subject',FILTER_SANITIZE_STRING)?filter_input(INPUT_GET,'subject'):'';
			$reqDesc = filter_input(INPUT_GET,'desc',FILTER_SANITIZE_STRING)?filter_input(INPUT_GET,'desc'):'';

			$request = $this->reqModel->createRequest($_SESSION['user'],$reqDate,$reqSubject,$reqDesc);
	}

}
	


	public function showRequest(){
		if(isset($_GET['reqid'])){
			
			$reqid = $_GET['reqid'];
			$this->reqModel->remove($reqid);
		
		}
		$request=$this->reqModel->getRequest($_SESSION['user']);
		require "View/MyRequests.php";
	}
}