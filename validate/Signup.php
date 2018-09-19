
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register member</title>
		<link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
  </head>
 
    
    <body>
       
        
           
<?php

     
     
   $said = $birthDate = $initials = $surname = $address = $phone = $email = $password = $username = "";
   $saidErr = $birthdateErr = $initialsErr = $surnameErr = $addressErr = $phoneErr = $emailErr = $passwordErr = $usernameErr = "";
   $errorGuide ="";
   if(isset($_GET["register"]))
   {
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {
        if(empty($_GET["initials"]))
        {
            $errorGuide = "Please make sure that all fields are provided";
            $initialsErr = "* Your initials are reqired";
        }else{
            $initials = test_input($_GET["initials"]);
            
            if(!preg_match("/^[a-zA-Z]*$/", $initials))
            {
                $errorGuide = "Please make sure that you provide correct informantion";
                $initialsErr = "* Only letters are allowed and no spaces";
            }
        }
		
		if(empty($_GET["surname"]))
		{
                        $errorGuide = "Please make sure that all fields are provided";
			$surnameErr = "* Your last name is required";
		}else{
			$surname = test_input($_GET["surname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$surname))
			{
				$surnameErr = "* Only letters are allowed";
			}
		}
		
		if (empty($_GET["phone"]))
		{
                        $errorGuide = "Please make sure that all fields are provided";
			$phoneErr = "* Your phone number is required";
		} else {
                    $phone = test_input($_GET["phone"]);
                    if(!preg_match('/^[0-9]/',$_GET["phone"]))
                    {
                        $phoneErr = "* Invalid phone number";
                    }
                    if(strlen($_GET["phone"])<10)
                    {
                        $phoneErr = "* Your phone number must have 10 digits";
                    }
                }
		if (empty($_GET["said"]))
		{
                        $errorGuide = "Please make sure that all fields are provided";
			$saidErr = "* Your ID number is required";
		}else{
			
			$said = test_input($_GET["said"]);
			if(!preg_match('/^[0-9 ]/', $_GET['said']))
			{
				$saidErr = "* Invalid ID number";
				
			}
                        
                        if(strlen($_GET["said"])<10)
                    {
                        $saidErr = "* Your ID number must have 10 digits";
                    }
		}
		if (empty($_GET["email"])) 
		{
                    $errorGuide = "Please make sure that all fields are provided";
                    $emailErr = "* Your email is required";
		} else {
			$email = test_input($_GET["email"]);
    
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$emailErr = "* Invalid email format"; 
			}
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
  
		if(empty($_GET["address"]))
		{
                    $errorGuide = "Please make sure that all fields are provided";
                    $addressErr = "* Your address is required";
		}else{
			$address = test_input($_GET["address"]);
			
			if(!preg_match('/^[a-zA-Z 0-9]/',$_GET["address"]))
			{
				$addressErr = "* Your address must have only  letters and numbers";
			}
			
		}
		if(empty($_GET["birthdate"]))
		{
                    $errorGuide = "Please make sure that all fields are provided";
                    $birthdateErr = " * Your date of birth is reqired";
		}
		
		if (empty($_GET["password"]))
		{
                    $errorGuide = "Please make sure that all fields are provided";
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
        
      
        
        
?>
         
             <h4><?php echo $errorGuide;?></h4>
                   
    </body>
</html>