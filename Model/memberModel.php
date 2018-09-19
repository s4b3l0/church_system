<?php

include_once "Model/Member.php";
class memberModel {
    public $memberArray;
    public function viewMembmer($rank_id)
    {
        $sql = "SELECT
    member_initials, member_surname , member_address , member_phone, member_email, member_SAID ,
    member_birthdate,member_id,rank_id
    FROM
    churchsystem.tblmember  WHERE rank_id like '$rank_id'";
        $result = mysql_query($sql) or die(Mysql_error());
        
        while ($row = mysql_fetch_array($result)) {
            $initials = $rows['member_initials'];
            $surname = $rows['member_surname'];
            $address = $rows['member_address'];
            $phone = $rows['member_phone'];
            $email = $rows['member_email'];
            $said = $rows['member_SAID'];
            $birthdate = $rows['member_birthdate'];
            $member_id = $row['member_id'];
            $rankid = $rows['rank_id'];
            
            $this->memberArray[$said] = new Member($initials, $surname, $address, $phone, $email, $said, $birthdate, $member_id);
        }
        return $this->memberArray;
    }
    public function deleteMember($member_id)
    {
       /* $sql="delete from tblmember
        where member_id = '$member_id'";*/
        $sql = "call sp_deleteMember($member_id)";
        $qry= mysql_query($sql) or die(mysql_error());
	exec($qry);
    }
}
