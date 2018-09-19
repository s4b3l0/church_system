<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MemberControl
 *
 * @author Sabelo
 */
   



include 'Model/Model.php';
include 'Model/memberModel.php';

class MemberControl {
    public $model;
    public $member;


    public function __construct() {
    $this->model = new Model();
    $this->member = new memberModel();
    
    }
    public function MemberList() {
        if (filter_input(INPUT_GET,'rankid',FILTER_SANITIZE_STRING)!=NULL){
             $member  = $this->model->getMemList(filter_input(INPUT_GET,'rankid',FILTER_SANITIZE_STRING));
             
        } else {
            $member  = $this->model->getMemList('%');
        }
        
       
         $rank = $this->model->getRankList();
        require "View/MemberList.php";
    }
     
    public function InsertMember(){
        
        require "View/InsertMember.php";
       if(     filter_input(INPUT_GET,'initials',FILTER_SANITIZE_STRING)&&
               filter_input(INPUT_GET,'surname',FILTER_SANITIZE_STRING)&&
               filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING)&&
               filter_input(INPUT_GET,'address',FILTER_SANITIZE_STRING)&&
               filter_input(INPUT_GET,'phone',FILTER_SANITIZE_STRING)&&
               filter_input(INPUT_GET,'email',FILTER_SANITIZE_STRING)&&
               filter_input(INPUT_GET,'said',FILTER_SANITIZE_STRING)&&
               filter_input(INPUT_GET,'birthdate',FILTER_SANITIZE_STRING) &&
               filter_input(INPUT_GET,'password',FILTER_SANITIZE_STRING) 
               
                ){
            
           
   $member = $this->model->addMember(
           
             filter_input(INPUT_GET,'initials',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'surname',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'username',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'address',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'phone',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'email',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'said',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'birthdate',FILTER_SANITIZE_STRING),
             filter_input(INPUT_GET,'password',FILTER_SANITIZE_STRING)
                );
   
    }
   
   
}  


public function deleteMember()
{
     
        if (filter_input(INPUT_GET,'rankid',FILTER_SANITIZE_STRING)!=NULL){
             $member  = $this->model->getMemList(filter_input(INPUT_GET,'rankid',FILTER_SANITIZE_STRING));
             
        }else {
            $member  = $this->model->getMemList('%');
        }
        
     if(isset($_GET['member_id'])) 
     {
         $memmer_ID = $_GET['member_id'];
         $this->member->deleteMember($memmer_ID);
     }
     $rank = $this->model->getRankList();
        require "View/deleteMember.php";
    }
     
        

}

