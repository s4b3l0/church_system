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

class MemberControl {
    public $model;
    
    public function __construct() {
    $this->model = new Model();
    
    }
    public function invoke() {
        $member  = $this->model->getMemList();
          $rank = $this->model->getRankList();
        include "View/MemberList.php";
    }
    
   
    
    
    
}
