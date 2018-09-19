<?php

/**
* 
*/
require_once 'Model/user.php';
class UserModel
{
public $userArray;


public function updateDetails($initials,$surname,$address,$phone,$email,$username)
{

	$this->userArray[$username]->initials=$initials;
	$this->userArray[$username]->surname=$surname;
	$this->userArray[$username]->address=$address;
	$this->userArray[$username]->phone=$phone;
	$this->userArray[$username]->email=$email;
		$sql = "UPDATE tblmember 
			SET member_initials = '$initials',
				member_surname = '$surname', 
				member_address = '$address',
				member_phone ='$phone',
				member_email ='$email'
			WHERE member_username = '$username'";
	$qry= mysql_query($sql) or die(mysql_error());
	exec($qry);

}
//------------------------------------------------------------------------------------------------------------------------------------------------
public function setDetails($initials,$surname,$phone,$address,$phone,$email,$username)
{
	
	$sql = "SELECT member_initials,member_surname,member_initials,member_address,member_phone,member_email,member_username
			FROM tblmember
			WHERE member_username = '$username'";

	$qry = mysql_query($sql) or die(mysql_error().' '.$sql);


	while ($row = mysql_fetch_array($qry)) {
		$initials=$row['member_initials'];
		$surname = $row['member_surname'];
		$address = $row['member_address'];
		$phone = $row['member_phone'];
		$email = $row['member_email'];
		$username = $row['member_username'];
		$this->userArray[$username] = new User($initials,$surname,$address,$phone,$email,$username);

	}



}
//--------------------------------------------------------------------------------------------------------------------------------------
Public function getDetails($username)
{
	$initials ='';
	$surname='';
	$address='';
	$phone='';
	$email='';
	
	$this->setDetails($initials,$surname,$phone,$address,$phone,$email,$username);
	return $this->userArray;
}

public function deleteMember($username)
{
    $sql = "delete from tblmember where member_username = '$username'";
    $result = mysql_query($sql) or die(mysql_error());
}
}