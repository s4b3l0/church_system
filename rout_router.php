<?php
/*$controller ='Member';
$action='MemberList';*/
function call($controller, $action )
 {
    // echo '<br/> controller and action '.$controller.' '.$action;
    require_once('Control/'.$controller.'_Control.php');
    switch ($controller)
    {
        case 'pages':
           $controller = new PagesControl();
            break;
        case 'Member':
            $controller = new MemberControl();
            require_once 'Model/Member.php';     
            require_once'Model/Rank.php';
            break;
	    case 'offering':
            $controller = new offeringController();
            require_once 'Model/offering.php';
            require_once 'Model/offeringRecord.php';
            include_once 'Model/recordOffering.php';
            break;
        case 'Rank':
            $controller = new RankControl();
            require_once 'Model/Rank.php';
        case 'Login':
            $controller = new LoginControl();
            require_once 'Model/user.php';
            break;
        case 'memberRank':
	    	$controller = new memberRank_Control();
            require_once 'Model/memberRank.php';
	    	break;    
        case 'request':
            $controller = new requestControl();
            require_once 'Model/RequestModel.php';
            break;
        case 'announcements': 
            $controller=new announcements_Control();
            require_once 'Model/announceModel.php';
            break;
        case 'services':
            $controller = new serviceControl();
            require_once 'Model/SeviceModel.php';
            break;
    }
   // require 'template.php';    
    $controller->{$action}();
}


     
     
     
     
$controllers = array('pages'=>  array('home','error','loginError'),
    'Member'=>array('MemberList','InsertMember','deleteMember'), 
    'offering' => array('offering','offeringRecord'),
    'Login' =>array('login','updateProfile','logOut'),
    'memberRank' =>array('memberRank'),
    'request'=>array('makeRequest','showRequest'),
    'services'=>array('showService','AddService','AddSunday'),
    'announcements'=>array('addAnnouncement','viewAnnouncements'));




if (array_key_exists($controller, $controllers)){
    if(in_array($action,$controllers[$controller])){
        call($controller,$action);
      
        
    }  else {
        call('pages','error');
    }
       
}  else {
        call('pages','home') ;  
}

