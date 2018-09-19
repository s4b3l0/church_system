<?php
class validate {

    function __construct() {
        
    }


    public function validate()
            
    {
        if(isset($_GET['login']))
        {
        if($_SERVER["REQUEST_METHOD"]=="GET")
    {
      
		
		if (empty($_GET["password"]))
		{
			$passwordErr = "User password is reqired";
		}
                if (empty($_GET['username']))
                {
                    $usernameErr = "* Username is required";
                } else {
                    $username = test_input($_GET['username']);
                    if(!preg_match('/^[a-zA-Z0-9]*$/',$_GET["username"]))
                    {
                        $usernameErr = "* Your username must have only letters and numbers";
                    }
                }
		
		
    }
        }
        require_once 'view/login.php';
    }
    
    function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            
        }

}