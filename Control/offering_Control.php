


<?php

include 'Model/Model.php';
include 'Model/OfferingModel.php';

class offeringController {
    
    public $model;
    public $offer;


    public function __construct() {
        $this->model = new Model();
        $this->offer = new OfferingModel();
        
    }

 public function offering()
 {
    
    $serv =  $this->model->serviceDropdown();
   
    $offerType = $this->model->getOfferingType();
   
   
   
        if (isset($_GET['offeringType'])&& isset($_GET['service_id']) && isset($_GET['txtAmount']))
        {
            
            $offeringType = $_GET['offeringType'];
            $servID = $_GET['service_id'];
            $amount = $_GET["txtAmount"];
            $offType = $this->offer->offeringDiscription($offeringType);
            $sermon = $this->offer->service($servID);
            $insert = $this->model->InsertOffering($offeringType, $servID, $amount);
            
          if(isset($_GET['add_offering']))
          {
             // echo'fdf'. $offType;
              $record = $offType." offering is recorded to ".$sermon." with the amount of R".$amount;
          }
           
        } else {
            
        }
  
   include "view/addOffering.php";
 }
 public function offeringRecord()
 {
     $offerType = $this->model->getOfferingType();
     if(isset($_GET['offeringType']))
     {
         $offeringType = $_GET['offeringType'];
         $offer = $this->offer->viewOffering($offeringType);
        $total = $this->offer->totalAmount($offeringType);
         
     }
     include "view/offeringReport.php";
 }
}
 
