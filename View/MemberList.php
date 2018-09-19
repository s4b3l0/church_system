<?php
	error_reporting(0);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>View members</title>
               <link rel='stylesheet' type="text/css" href="pcss/style2.css">
		<link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
                <link rel="stylesheet" type="text/css" href="styles/style.css"/>
             
    </head>
    
    <body>
       
        
            <div id="wrapper">
                
            <h2 class="print"><u>VIEW MEMBERS BY RANK</u></h2>
        <form name="form1" action='<?php echo $_SERVER['PHP_SELF'];?>'   method=GET >
         <input type=hidden name=controller value='Member'>
            <input type=hidden name=action value='MemberList'>
            <div class="screen">
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
                
            <input type="submit" value="OK"  />
 </div>
            <br>
 
            <br>
<div class="print" style="width:1300px">
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
                        
                    </tr>';
            
            
          }
              
         
        echo '</table>'; 
        
?>   
     <a href='javascript:window.print();'>Print</a>
</div>       
     </form>

            </div> 
        
    </body>
</html>
