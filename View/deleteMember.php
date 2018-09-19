<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete member</title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    </head>
    <body>
        <div id="wrapper">
        <form name="form1" action='<?php echo $_SERVER['PHP_SELF'];?>'   method=GET  >
            <input type=hidden name=controller value='Member'>
            <input type=hidden name=action value='deleteMember'>
        <?php
             
                if  ((filter_input(INPUT_GET,'rankid',FILTER_SANITIZE_STRING)) != NULL){
                    
                    $selval =filter_input(INPUT_GET,'rankid',FILTER_SANITIZE_STRING);
                }  else {
                    $selval = "%";
                }
                
                echo "<select name='rankid' >
                <option value='%'> All members </option>";
                foreach ($rank as $rank) {
                    if ($selval == $rank->rankid) {
                        $selsel = "Selected";
                    }  else {
                    $selsel="";    
                    }
                    
                    
                    
                    echo "<option value = ".$rank->rankid.$selsel.">$rank->description</option>"
                            . "";  
                   
                    }
                // 
                    
                echo '</select>';
                ?>
                
            <input type="submit" value="OK"  >
            
            <br><br>
            
            <?PHP
        echo"
             <table border='1'  class='responstable'>
            <tbody>
                <tr>
                    <th>Member initials</th>
                    <th>Surname</th>
                    <th>Home address</th>
                    <th>Phone number</th>
                    <th>Email address</th>
                    <th>ID number</th>
                    <th>Date of birth</th>
                    <th>Delete member</th>
                    
            </tbody>
        ";
              foreach ($member as $member) {
           
                
            
            
            echo '<tr><td>'.$member->initials.'</td>
                    <td>'.$member->surname.'</td>
                    <td>'.$member->address.'</td>
                    <td>'.$member->phone.'</td>
                    <td>'.$member->email.'</td>
                    <td>'.$member->said.'</td>
                    <td >'.$member->birthdate.'</td>
                     <td><button name="member_id" value='.$member->member_id.' >Delete member</button></td>   
                    </tr>';
            
            
          }
         
         
        echo '</table>'; 
?>   
            </form> 
        </div>
    </body>
</html>
