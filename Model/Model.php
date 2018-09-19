<?php

/**
 * @author Sabelo
 */
include_once "Model/connectme.php";
include_once "Model/Member.php";
include_once "Model/Rank.php";
include_once "Model/Service.php";
include_once "Model/Sermon.php";
include_once "Model/offering.php";
include_once 'Model/user.php';
include_once 'Model/memberRank.php';
include_once 'Model/recordOffering.php';
//---------------------------------------------------------------------------------------------------------------------------------------------
class Model {

    public $memberArray;
    public $rankArray;
    public $sermonArray;
    public $serviceArray;
	public $offerTypeArray;
//---------------------------------------------------------------------------------------------------------------------------------------------
    public function getMemList($rankid) {
        $initials = '';
        $surname = '';
        $address = '';
        $phone = '';
        $email = '';
        $said = '';
        $birthdate = '';
        $member_id = '';


        $this->SetList($initials, $surname, $address, $phone, $email, $said, $birthdate, $rankid,$member_id);
        return $this->memberArray;
    }

    
    
//---------------------------------------------------------------------------------------------------------------------------------------------
    public function getRankList() {
        $rankid = '';
        $description = '';
        $this->setRanks($rankid, $description);
        return $this->rankArray;
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
    public function getsermonList() {
          $sermonID='';
        $sermTitle='';
       $this->setSermonList($sermonID,$sermTitle);
       return $this->rankArray;
    }
    //------------------------------------------------------------------------------------------------------------------------------------------
    public function setService() {
        
        
        $sql="SELECT churchsystem.tblservice.service_date, churchsystem.tblservice.service_time, churchsystem.tblsermon.sermon_title 
                FROM churchsystem.tblservice, churchsystem.tblsermon 
                WHERE churchsystem.tblservice.sermon_id = churchsystem.tblsermon.sermon_id
                AND churchsystem.tblservice.service_date >= DATE(NOW());";
        $qry= mysql_query($sql)or die(mysql_error());
        
        while ($row = mysql_fetch_array(qry))
        {
            $serviceDate = $row['service_date'];
            $serviceTime = $row['service_time'];
            $sermonTitle = $row['sermon_title'];
      
            $this->serviceArray = new service($serviceDate,$serviceTime,$sermonTitle);
        }
        
        
    
}
    
//---------------------------------------------------------------------------------------------------------------------------------------------
    public function setSermonList() {
      
        $sql = "
        SELECT
        sermon_id, sermon_title
        FROM
        churchsystem.tblsermon;";
        $qry = mysql_query($sql) or die(require_once 'View/pages/databaseError.php');;
        while ($row = mysql_fetch_array($qry)) {
            $sermonID = $row['sermon_id'];
            $sermTitle = $row['sermon_title'];
            $this->sermonArray = new Sermon($sermonID,  $sermTitle);
        }
        
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
    
    
    public function SetList($initials, $surname, $address, $phone, $email, $said, $birthdate, $rankid) {
   
        $sql = "SELECT
    member_initials, member_surname , member_address , member_phone, member_email, member_SAID ,
    member_birthdate,rank_id, member_id
    FROM
    churchsystem.tblmember  WHERE rank_id like '$rankid' ;";
        //----------------------------------------------------------------------------------------------------------------------------------------
        $qry = mysql_query($sql) ;
        //----------------------------------------------------------------------------------------------------------------------------------------
        while ($rows = mysql_fetch_array($qry)) {
            $initials = $rows['member_initials'];
            $surname = $rows['member_surname'];
            $address = $rows['member_address'];
            $phone = $rows['member_phone'];
            $email = $rows['member_email'];
            $said = $rows['member_SAID'];
            $birthdate = $rows['member_birthdate'];
            $rankid = $rows['rank_id'];
            $member_id = $rows['member_id'];
            
         

            $this->memberArray[$initials] = new Member($initials, $surname, $address, $phone, $email, $said,
                    $birthdate,$member_id);
        }
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
    public function setRanks($rankid, $description) {
    
        $sql1 = "
        SELECT
            rank_id, rank_description
        FROM
            churchsystem.tblrank;";
      
        $qry1 = mysql_query($sql1)or die(require_once 'View/pages/databaseError.php');;
        while ($row2 = mysql_fetch_array($qry1)) {
            $rankid = $row2['rank_id'];
            $description = $row2['rank_description'];
            $this->rankArray[$rankid] = new Rank($rankid, $description);
        }
  
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
    public function addMember($initials, $surname,$member_username, $address, $phone, $email, $said, $birthdate, $member_password)
    {
             
        $sql2 = "INSERT INTO tblmember(member_initials,member_surname,member_username, member_address,member_phone,
            member_email,member_SAID,member_birthdate, member_password)
        VALUES ('$initials','$surname','$member_username','$address',' $phone','$email','$said','$birthdate', '$member_password')";
        if (mysql_query($sql2)) {
            $qry = mysql_query($sql2);
        }else
        {
            $_COOKIE['message']='It seems you are already';
        }
        exec($qry); 
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
    public function UpdateMember($initials, $surname, $address, $phone, $email,$member_username) {
       $initials = '';
        $surname = '';
        $address = '';
        $phone = '';
        $email = '';
        $member_username = '';
      

       $sql ="UPDATE tblmember
	SET member_initials='$initials',member_surname ='$surname', member_phone='$phone',member_address='$address',member_email='$email'
	WHERE member_username = '$member_username';";

      $qry=mysql_query($sql)or die(require_once 'View/pages/databaseError.php');;
      exec($qry);
       
    }
//------------------------------------------------------------------------------------------------------------------------------------------------
	 public function serviceDropdown()
	{
		
                $query = "SELECT tblservice.service_id 'service_id', concat(tblsermon.sermon_title, ' ', date(tblservice.service_date)) 'sermon_title'
                        FROM tblservice, tblsermon  
                        where tblservice.sermon_id = tblsermon.sermon_id 
                        and service_date <= DATE(NOW())
                        ORDER BY tblservice.service_date DESC
                        LIMIT 3";
                $result = mysql_query($query) or die(mysql_error());
                
                
                   $count = 0;
                
                while ($row = mysql_fetch_array($result))
                {
                                  $service_id = $row['service_id']; 
                                  $sermon_title = $row['sermon_title'];
                    $this->serviceArray[$count] = new service($service_id,$sermon_title);
                    $count++;
                }
                
                return $this->serviceArray;
		
	}
	
	//----------------------------------------------------------------------------------------------------------------------------------------------
	public function getOfferingType()
        {
            $query = "select type_description,type_id from tblofferingtype";
            $result = mysql_query($query) or die(mysql_error());
            $count = 0;
            
            while($row = mysql_fetch_array($result))
            {
                
              $offeringType = $row['type_description'];
              $type_id = $row['type_id'];
              $this->offerTypeArray[$offeringType] = new offering($offeringType,$type_id);
              
            }
            return $this->offerTypeArray;
        }
	//----------------------------------------------------------------------------------------------------------------------------------------------
	function InsertOffering($offeringType, $servID, $amount)
        {
           $sql = "insert into tblOffering( type_id,service_id, offering_amount) 
            values($offeringType,'$servID', '$amount')";
                                
           
           
           $query = mysql_query($sql) or die(mysql_error()); 
          
        }
		
	//--------------------------------------------------------------------------------------------------------------------------------------------------
	function performQuery($query)
        {
            mysql_query($query) or die(mysql_error());
        }
	
        public static function find($member_username, $member_password)
    {
        $list = array();
        $db =Db::getInstance();
        $sql ="SELECT m.member_username, r.rank_description
               from tblmember m, tblrank r
               where m.rank_id = r.rank_id
               and m.member_username = '$member_username'
               and m.member_password = '$member_password'";
        $req = $db->query($sql);
        $count = 0;
        
        foreach ($req->fetchAll() as $user)
        {
            
            $list[$count] = new User($user['member_username'], $user['rank_description']);
            $count++;
        }
        if($count>0){
        
            return $list[0]->member_username;
    }else {
        return FALSE;
        }
    }
    //---------------------------------------------------------------------------------------------------------------------------------------------------------
    public static function getRole($username,$password)
    {
        
        $qry  = "SELECT rank_id FROM tblmember WHERE member_username = '$username' AND member_password = '$password'";
        $sql = mysql_query($qry);
        
        if (mysql_result($sql,0) != NULL){
         $rank = mysql_result($sql,0);
         return $rank;
        }  else {
            return 'member not found';
        }
  // mysql_fetch_field($sql);
        return $rank;
    }
    //---------------------------------------------------------------------------------------------------------------------------------------------------------------------
   public function assignRole($rank_id, $member_id)
    {
        $sql = "update tblmember
                set rank_id = $rank_id
                where member_id = $member_id";
        $qry=mysql_query($sql)or die(mysql_error());
      exec($qry);
    }
  
     public function getMember()
    {
        $sql = "select member_id ,concat(member_surname, ' ', member_initials) as member_name from tblmember";
        $result = mysql_query($sql) or die(mysql_error());
        $count = 0 ;
        
        while ($row = mysql_fetch_array($result)) {
            $member_id = $row['member_id'];
            $member_name = $row['member_name'];
            $this->memberArray[$count] = new memberRank($member_name, $member_id);
            $count++;
            
        }
        
        return $this->memberArray;
    }
	
	public function getRank()
    {
        $sql = "select rank_id as rankid , rank_description  as description from tblrank";
        $result = mysql_query($sql) or die(mysql_error());
        $count = 0;
        
        while ($row = mysql_fetch_array($result)) {
            $rankid = $row['rankid'];
            $description = $row['description'];
            $this->rankArray[$count] = new Rank($rankid, $description);
            $count++;
        }
        return $this->rankArray;
    
}
	
	 public function assignRank($rankid, $member_id)
    {
        $sql = "update tblmember
                set rank_id = '".$rankid."'
                where member_id = '$member_id'";
        $result = mysql_query($sql) or die(mysql_error());
    }
 }
