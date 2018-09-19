<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assign Rank</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="wrapper">
            <div id="content_area">
                <form name="rankFrm" action="" method="get">
                    <fieldset>
                        <br>
                        <label> Select member to assign</label>
                        <?php
                            if(filter_input(INPUT_GET,'member_surname', FILTER_SANITIZE_STRING)!=NULL)
                            {
                                $selval = filter_input(INPUT_GET,'member_surname',FILTER_SANITIZE_STRING);
                            } else {
                                $selval = "%";
                            }
                            
                            echo"<select name='member_surname'  >";
                
                            echo'<option value = "%">Select member</option>';
                            foreach ($member as $member)
                            {
                            if($selval == $member->member_surname)
                            {
                                 $selsel = "Selected";
                             } else {
                                $selsel = "";
                               }
                    
                    echo"<option value =".$member->member_surname.$selsel.">$member->member_surname</option>";
                }
                echo '</select>';
                        ?>
                        
                        <br><br>
                        <label>Select type of offering:</label>
                        <?php 
             
                
                            echo"<select name='rank_id'>";
                             echo'<option value = "%">Select type of offering </option>';
                
                            foreach ($rank as $rank)
                            {
                                if($selval == $rank->offeringType)
                                {
                                     $selsel = "Selected";
                                } else {
                            $selsel = "";
                            }
                    
                            echo"<option value =".$rank->rankid.$selsel.">$rank->description</option>";
                            }
                            echo '</select>';
                        ?>
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>
