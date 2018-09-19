<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RankControl
 *
 * @author Sabelo
 */
include 'Model/Model.php';
class RankControl {
    public $model;
    function __construct() {
        $this->model = new Model();
    }
    public function rankInvoke(){
        $rank = $this->model->getRankList();
        include "View/MemberList.php";
    }
    
    public function assignRank()
    {
        $member = $this->model->getMember();
        $rank = $this->model->getRankList();
        include 'view/assignRank.php';
    }

}
