<?php 
include 'Control/pages_Control.php';
include 'Model/Model.php';
include 'Model/userModel.php';
class LoginControl {
    public $model;
    public $userModel;
    public $Page;
function __construct() {
        $this->model = new Model();
        $this->userModel  = new userModel();
        $this->Page = new PagesControl();
    }
  public function login()
        {   
        $username=filter_input(INPUT_GET,'username',FILTER_SANITIZE_STRING)?filter_input(INPUT_GET,'username'):'';
        $password = filter_input(INPUT_GET,'password',FILTER_SANITIZE_STRING)?filter_input(INPUT_GET,'password'):'';
          
    if ($username != NULL && $password != NULL){
        
               $rank = $this->model->getRole($username, $password);

          if ($rank!=NUll){
           
            session_start();
            $_SESSION['user']=$username;
          $_SESSION['rank']=$rank;
         
           }

      }   
      
      
      require_once "View/Login.php";
      if(isset($_GET['login']))
      {
        echo "<meta http-equiv='refresh' content='1' reload='1'>";
      
      }
      
}
    

public function updateProfile()
{ 
  
   $username = $_SESSION['user'];
   

  if (isset($_GET['initials'])&&
        isset($_GET['surname'])&&
        isset($_GET['address'])&&    
        isset($_GET['phone'])&&    
        isset($_GET['email']))
{
        
          $initials=$_GET['initials'];
          $surname=$_GET['surname'];
          $address=$_GET['address'];
          $phone=$_GET['phone'];
          $email=$_GET['email'];
          $user = $this->userModel->updateDetails($initials,$surname,$address,$phone,$email,$username);
          
           $user  = $this->userModel->getDetails($username);
          require_once 'view/updateMember.php';
}
else {
     $user  = $this->userModel->getDetails($username);
    include "View/updateMember.php";
}
}





 public function logOut()
{
  session_destroy();
      
  
  echo "<meta http-equiv='refresh' content='1' reload =1>";
  
   require_once'View/pages/home.php';

}

public function deleteMember()
{
    if(isset($_GET['username']))
    {
        $username = $_GET['username'];
        $this->userModel->deleteMember($username);
    }
}



}


