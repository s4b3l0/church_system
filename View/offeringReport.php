<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Offering</title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        
    </head>
    <body>
        <div id="wrapper">
            
            <h2><u>Offering Report</u></h2>
            <form name="reportForm" id="frm" action="" method="GET">
                <input type=hidden name= controller value ='offering'>
                <input type =hidden name=action value='offeringRecord'>
                
                    
                    <label>Select Type of offering:</label>
                    <?php
                        echo"<select name='offeringType' class ='drp'>";
               echo'<option value = "%">Select type of offering </option>';
                
                foreach ($offerType as $offerType)
                {
                    if($selval == $offerType->offeringType)
                    {
                        $selsel = "Selected";
                    } else {
                        $selsel = "";
                    }
                    
                    echo"<option value =".$offerType->type_id.$selsel.">$offerType->offeringType</option>";
                }
                echo '</select>';
                echo ' <input type="submit" value = "OK" >';
                echo '<br>';
                echo '<br>';
                
                
                echo"
             <table border='1' class='responstable'>
            <tbody>
                <tr>
                    <th>Service</th>
                    <th>Sermon title</th>
                    <th>Amount</th>
                    
            </tbody>";
                
                
                foreach ($offer as $offer) {
           
                
            
            
            echo '<tr><td>'.$offer->sermon_title.'</td>
                    <td>'.$offer->service_date.'</td>
                    <td>'.$offer->offerAmount.'</td>
                    </tr>';
            
            
          }
              
         
        echo '</table>';
            
        
                echo "</table>";
               
               foreach ($total as $total)
                {
                    //echo '<labe name  ="totAmount" >'.$total->totAmount.'</label>';
                }
                echo '<br>';
                echo '<br>';
                echo '<label name  ="totAmount" >'.$total->totAmount.'</label>';
                
                ?>
            
            
    
               
            </form>
            
        </div>
        
    </body>
</html>
