<?php

    $dob = $initials = $surname = $address = $cell = $email = $password = $username = "";
   $dobErr = $initialsErr = $surnameErr = $addressErr = $cellErr  = $emailErr = $passwordErr = $usernameErr = "";

if(isset($_POST['register']))
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["surname"]))
		{
                        $errorGuide = "Please make sure that all fields are provided";
			$surnameErr = "* Your last name is required";
		}else{
			$surname = test_input($_POST["surname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$surname))
			{
				$surnameErr = "* Only letters are allowed";
			}
                    }  
                    
        if(empty($_POST['initials']))
        {
            $initialsErr ="Your initials are required";
        } else {
            $initials = test_input($_POST["initials"]);
            
            if(!preg_match("/^[a-zA-Z]*$/", $initials))
            {
                
                $initialsErr = "Only letters are allowed and no spaces";
            }
        }
        
      if(empty($_POST["username"]))
      {
          $usernameErr = "Your username is required ";
      } else {
          
          $username = test_input($_POST["username"]);
          
          if(!preg_match('/^[a-zA-Z0-9]*$/',$_POST["username"]))
                    {
                        $usernameErr = "* Your username must have only letters and numbers";
                    }
      }
      
      if(empty($_POST["address"]))
      {
          $addressErr = "Your address is required";
      } else {
          $address = test_input($_POST["address"]);
          if(!preg_match('/^[a-zA-Z 0-9]/',$_POST["address"]))
            {
                $addressErr = "* Your address must have only  letters and numbers";
            }
			
      }
      
      if (empty($_POST["cell"]))
		{
                       
			$cellErr = "Your phone number is required";
		} else {
                    $cell = test_input($_POST["cell"]);
                    if(!preg_match('/^[0-9]/',$_POST["cell"]))
                    {
                        $cellErr = "* Invalid phone number";
                    }
                    if(strlen($_POST["cell"])<10)
                    {
                        $cellErr = "* Your phone number must have 10 digits";
                    }
                }
        if (empty($_POST["email"])) 
	{
            
             $emailErr = "* Your email is required";
	} else {
            $email = test_input($_POST["email"]);
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
		$emailErr = "* Invalid email format"; 
            }
        }
        
        if (empty($_GET["password"]))
		{
                    
                    $passwordErr = "* Your password is reqired";
		}
		
        
        
    }
    
  
}

function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            
        }