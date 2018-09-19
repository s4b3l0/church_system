
<head>
        <meta charset="UTF-8">
        <title>Record Offering</title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
    </head>
    
<body>
    <div id="wrapper">


    <h2><u>RECORDING SERVICE OFFERINGS</u></h2>
<div id="frm">
<form name="offerForm" action='<?php echo $_SERVER['PHP_SELF'];?>' method=GET >
    <input type=hidden name=controller value='offering'>
            <input type=hidden name=action value='offering'>
        <fieldset>
            <br>
            <label>Select service to offer:</label>
            <?php 
               if(filter_input(INPUT_GET,'service_id', FILTER_SANITIZE_STRING)!=NULL)
                {
                    $selval = filter_input(INPUT_GET,'service_id',FILTER_SANITIZE_STRING);
                } else {
                    $selval = "%";
               }
               
                echo"<select name='service_id'  >";
                
                 
                foreach ($serv as $serv)
                {
                    if($selval == $serv->service_id)
                    {
                        $selsel = "Selected";
                    } else {
                        $selsel = "";
                    }
                    
                    echo"<option value =".$serv->service_id.$selsel.">$serv->sermon_title</option>";
                }
                echo '</select>';
                ?>
            <br>
            <br>
            <label>Select type of offering:</label>
            <?php 
             
                
                echo"<select name='offeringType'>";
               
                
                foreach ($offerType as $offerType)
                {
                    if($selval == $offerType->offeringType)
                    {
                        $selsel = "Selected";
                    } else {
                        $selsel = "";
                    }
                    
                    echo"<option value =".$offerType->type_id.">".$offerType->offeringType."</option>";
                }
                echo '</select>';
                ?>
            <br>
            <br>
            <label>Offering Amount:</label>
            <input type ='number' class='inputField' name ='txtAmount' pattern=".{4,}" required title = "Please insert amount to record"> <br/><br/>
            <label id="feedback"><?php echo $record; ?></label><br><br><br>
            <input type='submit' value='Add offering' name="add_offering" >
            
        </fieldset>
        
    </form>
</div>
    </div>
</body>