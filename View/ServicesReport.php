<doctype html>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
  </head>
  <body>
    <div id="wrapper">
        <form method=GET>
		<h2>Upcoming Services</h2>
        <label for=sermon>Select Sermon</label>
        <input type=hidden name=controller value='services'>
        <input type=hidden name=action value='showService'>
        
            <?php   
              if  ((filter_input(INPUT_GET,'sermon',FILTER_SANITIZE_STRING)) != NULL){
                    
                    $selval =filter_input(INPUT_GET,'sermon',FILTER_SANITIZE_STRING);
                }  else {
                    $selval = "%";
                }
            
           echo "<select name='sermon'> 
          <option value='%'> All Sermons</option>";
              foreach ($sermon as $sermon) {
                    if ($selval == $sermon->sermonID) {
                        $selsel = "Selected";
                    }  else {
                    $selsel="";    
                    }  
                  
                  
                  
                echo "<option value='$sermon->sermonID'>$sermon->sermTitle</option>";
            }
            ?>
        </select>
              <input type="submit" value="Ok">
            
              <br><br>
      
          
              

                  <?php 
                       foreach($service as $service) {
                         

                           echo "<table style='width:500px;float:left' border='3' class ='responstable'>  <tr>
                       <th style='width:50%'>Service Date:</th><td>$service->serviceDate</td></tr><tr>
                        <th>Sermon:</th><td>$service->sermon</td></tr><tr>
                       <th>Service Time:</th><td>$service->serviceTime</td>
                       </tr>  </table>  <br/><br/><br/><br/><br/><br/><br/><br/>";

                        }
                        

                  ?>
             </form>

     
        
    </div>
  </body>
</html>