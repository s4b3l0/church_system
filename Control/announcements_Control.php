<?php

include_once 'Model/announceModel.php';
class announcements_Control {
    public $announcement;
    
    public function __construct() {
        $this->announcement = new announceModel();
    }
    
    public function addAnnouncement()
    {
        if(isset($_POST['announce_topic'])&& isset($_POST['announcement']))
        {
             $announce_topic = $_POST['announce_topic'];
             $announcement = $_POST['announcement'];
             $announce_date = $_POST['announce_date'];
             $username = $_SESSION['user'];
           
                   
            
            
                $path = "uploads/";
                $path = $path.basename($_FILES['announce_upload']['name']);
                if(move_uploaded_file($_FILES['announce_upload']['tmp_name'],$path)){
                   // echo $path;
                     
                        $announce_upload = $path;
                
                         
                       

                }   
                     
                
            $this->announcement->makeAnnouncement($announcement,$announce_upload, $announce_topic, $username);
        }
        require_once 'view/makeAnnouncement.php';
    }
    
    public function viewAnnouncements()
    {
        $announcement = $this->announcement->viewAnnouncement();
        require_once 'view/viewAnnouncements.php';
    }
}
