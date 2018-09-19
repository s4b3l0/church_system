<?php
include_once "Model/connectme.php";
include_once 'Model/Request.php';
class requestModel
{	public $requestArray;

	public function getRequest($username)
	{
			$reqDate ='';
			$reqSubject ='';
			$reqDesc ='';
			$reqId ='';
		
			$memid =$this->getId($username);
			$this->setRequest($reqId,$reqDate,$reqSubject,$reqDesc,$memid);
			return $this->requestArray;

	}
	public function setRequest($reqId,$reqDate,$reqSubject,$reqDesc,$memid)
	{
		
		$sql = "SELECT req_id,req_date,req_subject, req_description FROM tblrequest WHERE member_id = '$memid' ";//and req_date >= DATE(NOW())
		$qry = mysql_query($sql) or die(mysql_errno());
		
		while ($row = mysql_fetch_array($qry)) {
			$reqDate =$row['req_date'];
			$reqSubject =$row['req_subject'];
			$reqDesc =$row['req_description'];
			$reqId = $row['req_id'];
		$this->requestArray[$reqId] = new Request($reqId,$reqDate,$reqSubject,$reqDesc);
		}

	}





	 public function getID($username)
	{
		$sql ="SELECT member_id FROM tblmember WHERE member_username = '$username'";
		$qry = mysql_query($sql);
		
         $result = mysql_result($qry,0);
         return $result;
	} 


	public function createRequest($user,$reqDate,$reqSubject,$reqDesc){
		
		//$sql ="INSERT INTO tblrequest
		//	VALUES(NULL,'$memid','$reqDate','$reqSubject','$reqDesc')";
            
                $sql="call sp_makeRequest('$reqDate','$reqSubject','$reqDesc','$user')";
                echo $sql;
		$qry = mysql_query($sql) or die(mysql_error());
		
		exec($qry);
	}
//------------------------------------------------------------------------------------
	public function remove($reqid)
	{
	 $sql="DELETE FROM tblrequest WHERE  req_id = '$reqid'"; 
	 $qry= mysql_query($sql);
	 
	 exec($qry);

	}

//-------------------------------------------------------------------------------------



}