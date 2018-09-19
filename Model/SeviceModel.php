<?php
/**
* 
*/
include_once "Model/connectme.php";
include_once 'Model/serviceObj.php';
include_once 'Model/Sermon.php';


class Service
 {
	public $sermArray; 
	public $serviceArray;

	//=======================================================
	Public function setSermon($sermonID,$sermTitle)
	{
		$sql ="SELECT sermon_id,sermon_title	FROM tblsermon";
		$qry = mysql_query($sql);
		//echo $sql;
		while ($row = mysql_fetch_array($qry)) {
			$sermonID = $row['sermon_id'];
			$sermTitle = $row['sermon_title'];
				$this->sermArray[$sermonID]= new Sermon($sermonID,$sermTitle);
			}

	}
	Public function getSermon()
	{
		$sermonID='';
		$sermTitle='';

		$this->setSermon($sermonID,$sermTitle);	
		return $this->sermArray;
		
	}
	Public function setService($serviceID,$sermon,$serviceDate,$serviceTime,$val)
	{
		$sql="
			SELECT a.service_id,a.sermon_id,a.service_date,a.service_time,b.sermon_title 
			FROM tblservice a, tblsermon b
			WHERE a.sermon_id = b.sermon_id
			AND a.service_date>=DATE(SYSDATE())
                        AND a.sermon_id LIKE '$val' 
			ORDER BY a.service_date ASC
			LIMIT 20
		";
               // echo $sql;
		$qry = mysql_query($sql);
		while ($rows = mysql_fetch_array($qry)) {
			$serviceID= $rows['service_id'];
			$sermon= $rows['sermon_title'];
			$serviceDate= $rows['service_date'];
			$serviceTime= $rows['service_time'];
	
		$this->serviceArray[$serviceID] = new ServiceClass($serviceID,$sermon,$serviceDate,$serviceTime);}

		
	}
	Public function getService($val)
	{
		$sermon='';
		$serviceDate='';
		$serviceTime='';
		$serviceId='';	

		$this->setService($serviceId,$sermon,$serviceDate,$serviceTime,$val);
		return $this->serviceArray;	
	}
	Public 	function insertService($sermon,$serviceDate,$serviceTime)
	{
			$sql="INSERT INTO tblservice(sermon_id,service_date,service_time)
				VALUES('$sermon','$serviceDate','$serviceTime');
			";
                        //echo $sql;
			$qry = mysql_query($sql)or die(require_once 'View/pages/databaseError.php');;
			
			exec($qry);

			
	}
	Public function getNextSunday()
	{

		$sql ="SELECT DATE(NEXT_DAY(SYSDATE(),'sun')) AS DATE
		FROM DUAL;";
		
		$qry = mysql_query($sql)or die(require_once 'View/pages/databaseError.php');;
		$date= mysql_result($qry,0);
		return $date;
	}



}