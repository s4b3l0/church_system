<?php

include_once 'Model/Model.php';
class memberRank_Control {
    
    public function memberRank()
    {
        $model = new Model();
        $member = $model->getMember();
        $rank = $model->getRank();
        
        if(isset($_GET['member_name'])&& isset($_GET['rank']))
        {
            $rankid = $_GET['rank'];
            $memID = $_GET['member_name'];
           $assign = $model->assignRank($rankid, $memID);
        }
        
        require_once 'View/memberRank.php';
    }
    
  
}
