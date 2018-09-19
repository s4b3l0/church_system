<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
    </head>
    <body>
	<div id='wrapper'>
        <?php
        // put your code here
        echo 'Helo world';
        ?>
		
        <form action="" method="">
            <input type=hidden name=controller value='memberRank'>
            <input type =hidden name=action value='memberRank'>
            <fieldset>
                <legend>Assigning Rank</legend>
                <label>Select Member to Assign</label>
                <?php
                    if(filter_input(INPUT_GET,'member_name',FILTER_SANITIZE_STRING)!=NULL)
                    {
                        $selval = filter_input(INPUT_GET,'member_name',FILTER_SANITIZE_STRING);
                    }  else {
                       $selval ="%"; 
                    }
                    
                    echo "<select name = 'member_name'>";
                    echo '<option value ="%"> Select member</option>';
                    foreach ($member as $member)
                    {
                        if($selval == $member->memner_name)
                        {
                            $selval = "Selected";
                        }  else {
                            $selval = "";
                        }
                        echo "<option value =".$member->member_id.">$member->member_name</option>";
                        
                    }
                    echo '</select>';
                ?>
                <br><br>
                
                <label>Select role to assign</label>
                <?php
                    if(filter_input(INPUT_GET,'rank_id',FILTER_SANITIZE_STRING)!=NULL)
                    {
                        $selval = filter_input(INPUT_GET,'rank_id',FILTER_SANITIZE_STRING);
                    }  else {
                        $selval ="%";
                    }
                    
                    echo "<select name = 'rank'>";
                    echo '<option value= "%"> Select Rank</option>';
                    foreach ($rank as $rank)
                    {
                        if($selval == $rank->rankid)
                        {
                            $selval = "Selected";
                        }  else {
                            $selval ="";
                        }
                        echo "<option value =".$rank->rankid.$selval.">$rank->description</option>";
                    }
                    echo '</select>';
                ?>
                
                <br><br>
                <input type="submit" value="Assign">
                <br><br>
               <!-- <?php
                echo "<table border ='1'
                    <tbody>
                        <tr>
                            <th>Member initials</th>
                            <th>Member surname</th>
                            <th>Member Rank</th></tr>
                    </tbody>";
                
                foreach ($members as $members)
                {
                    echo '<tr><td>'.$members->initials.'</td><td>'.$members->member_name.'</td><td>'.$members->mem_Rank.'</td></tr>';
                }
                echo '</table>';
                ?>-->
            </fieldset>
        </form>
		</div>
    </body>
</html>
