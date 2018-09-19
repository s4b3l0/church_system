

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign up</title>
		<link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
                <link rel="stylesheet" type="text/css" href="styles/style.css"/>
                <script src="validate/id.js"></script>
                <script src="validate/phone.js"></script>


  </head>
 
    
    <body>
       
        <div id="wrapper">
	<?php
        include_once 'validate/Signup.php';
        
        ?>
        
	  
     <br>
      <h2><u>Sign up</u></h2>
    <form name="form1" action=""    method='GET'  >
            
            <input type=hidden name=controller value='Member'>
             <input type=hidden name=action value='InsertMember'>
            <input id='validator'  type=hidden name='valid' >
			<fieldset width= "60">
                           
            <table >
                <thead>
                    <tr>
                        <th></th>
                        <th><p id ="message" ></p></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label>South African id</label> <br></td>
                        <td><input id="said" type="tel" name="said"    maxlength="13"
                                   onkeydown="javascript:backspacerDOWNs(this,event);"
                                   onkeyup="javascript:backspacerUPs(this,event)"> <span class = "error"> <?php echo $saidErr; ?> </span></td>
						
                    </tr>
                    <tr>
                        <td><label>Birth date<label></td>
                        <td><input type="date" name="birthdate"   max="2000-12-31"/>
			<span class = "error"><?php   echo "<t>". $birthdateErr;?></span><br>			</td>
                    </tr>
                    <tr>
                        <td><label>Initials</label></td>
                        <td><input type="text" name="initials" maxlength="3"/>
                        <span class="error">  <?php  echo $initialsErr;?></span><br>    </td>
                    </tr>
                    <tr>
                        <td><label>Surname</label></td>
                        <td><input type="text" name="surname" />
			<span class = "error"><?php  echo $surnameErr; ?> </span><br>			</td>
                    </tr>
                    
                    <tr>
                        <td><label>Username</label></td>
                        <td><input type="text"  name="username">
                        <span class = "error"><?php  echo $usernameErr; ?> </span></td>
                    </tr>
                    <tr>
                        <td><label>Address</label></td>
                        <td><textarea rows="3" cols="22"type="text" name="address"  placeholder="street               suburb                    city/zip" ></textarea>
			<span class ="error" ><?php echo $addressErr; ?></span><br>			</td>
                    </tr>
                    <tr>
                        <td><label>Phone</label></td>
                        <td><input type="text" type="text" id="phone" name="phone"    maxlength="10"
                                   onkeydown="javascript:backspacerDOWN(this,event);"
                                   onkeyup="javascript:backspacerUP(this,event)">
			<span class = "error"><?php  echo $phoneErr; ?></span><br></td>
         
				   </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td><input type="email" name="email"  />
			<span class = "error"><?php echo $emailErr;?> </span><br>			</td>
                    </tr>
                    <tr>
                        <td><label>Password</label></td>
                        <td><input type="password" name="password" />
			<span class = "error"><?php echo $passwordErr; ?> </span>			</td>
                            
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input id="submit" type="submit" value="register" name="register" > </td>
                    
                    </tr>
                </tbody>
            </table>
			
			
			
			
			
			
			
</fieldset>
    
    
    
    
    
    
     </form>
	 </div>
          
 
	 </div>
        
        </div>

    </body>
</html>