        
<doctype html>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css">
</head>

<body>
<div id="wrapper">   
   
        <?php  
        include_once 'validate/login.php';
        ?>
        <h2><u>Login Page</u></h2>
        <form name='form1' class="frm" method=get  >
               <input type=hidden name=controller value='Login'>
               <input type=hidden name=action value='login'>
                 <fieldset>
                     <br>
                     <label for="username">User Name</label> <input type='text' name='username' value = '' required title="provide username"><span class = "error" ><?php  echo $usernameErr; ?> </span><br>
                     <label for="password">Password</label><input type='password' name='password' value = '' required title="password"><span class = "error"><?php  echo $passwordErr; ?> </span><br>
           
            <input type='submit' value='Login' name="login" >
             </fieldset>
        </form>
        <br>
        Login or <a href='?controller=Member&action=InsertMember'>Register </a> account
         
    
</div>
</body>  
</html>      
        
       
         
         
        
      
       
      
       



