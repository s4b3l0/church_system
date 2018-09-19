<?php

include_once "Model/offering.php";
include_once 'Model/offeringRecord.php';

/**
* 
*/
class OfferingModel
{public $offeringArray;
	public function setOfferingList(){
		$sql = "SELECT c.offering_id,type_description,c.offering_amount
				FROM tbloffering c, tblofferingtype a
				WHERE c.type_id = a.type_id AND type_description = 'Tithes'
				order by c.offering_id";

		$qry=mysql_query($sql) or die(require_once 'View/pages/databaseError.php');;
		

	}
        
        public function viewOffering($offeringType)
        {
            $sql = "select s.sermon_title, se.service_date, o.offering_amount
                    from tblsermon s, tblservice se, tbloffering o, tblofferingType t
                    where s.sermon_id = se.sermon_id
                    and se.service_id = o.service_id
                    and	t.type_id = o.type_id
                    and  (year(service_date) = year(now()))
                    and t.type_id = '$offeringType';";
            
            $result = mysql_query($sql) or die(require_once 'View/pages/databaseError.php');;
            $count = 0;
            
           while($row = mysql_fetch_array($result))
           {
               $sermon_title = $row['sermon_title'];
               $service_date = $row['service_date'];
               $offerAmount = $row['offering_amount'];
               $totAmount = 0;
               $this->offeringArray[$count] = new offeringRecord($sermon_title, $service_date, $offerAmount,$totAmount);
               $count++;
           }
           return $this->offeringArray;
        }
        
        public function totalAmount($offeringType)
        {
            $sql = "select concat('The total amount for ', t.type_description,' is R ',sum(o.offering_amount)) as 'Total amount'
                from tblsermon s, tblservice se, tbloffering o, tblofferingtype t
                where s.sermon_id = se.sermon_id
                and se.service_id = o.service_id
                and t.type_id = o.type_id
                and  (year(service_date) = year(now()))
                and t.type_id = '$offeringType'";
            $result = mysql_query($sql) or die(mysql_error());
            $count = 0;
            //$row = mysql_fetch_result($result);
            $totalAmount = 0;
            
            while($row =mysql_fetch_array($result,0))
            {
              $totalAmount = $row['Total amount'] ;
                $this->offeringArray[$totalAmount] = new offeringRecord($sermon_title, $service_date, $offerAmount, $totalAmount);
                $count++;
            }
            return $this->offeringArray;
        }
        
        public function offeringDiscription($type_id)
        {
            $sql = "select type_description from tblofferingtype
                    where type_id = '$type_id'";
            $result = mysql_query($sql) or die(require_once 'View/pages/databaseError.php');;
            
            //$offeringtype = mysql_result();
            
            while ($row = mysql_fetch_array($result))
            {
                $offeringtype = $row['type_description'];
            }
            
            return $offeringtype ;
        }
        
        public function service($service_id)
        {
            $sql = "select s.sermon_title from tblservice se, tblsermon s
                    where se.sermon_id = s.sermon_id
                    and se.service_id = '$service_id'";
            
            $result = mysql_query($sql) or die(mysql_error());
            
            while ($row = mysql_fetch_array($result)) {
                $sermon = $row['sermon_title'];
            }
            return $sermon;
        }
        
        
}


