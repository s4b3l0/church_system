<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Make announcements</title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    </head>
    <body>
        <?php
            //include_once 'validate/announceValidation.php';
        ?>
        <div id="wrapper">
            <form enctype="multipart/form-data" name=form1 method=POST>
                <input type=hidden name=controller value='announcements'>
                <input type=hidden name=action value='addAnnouncement'>
                <label>Topic:</label>
                <input type="text" name="announce_topic" required title="Provide topic"> <br><br>
                
                <label>Announcement:</label>
                <textarea rows="4" cols="50" type="text" name="announcement"  required title="Provide announcement"></textarea><br><br>
               <!-- <label>Date:</label>
                <input type="text" name="announce_date" min="2017-11-26" required title="Provide date" value="<?php //echo (new \DateTime())->format('Y-m-d');?>" /><br><br>-->
                <label>Upload file</label>
                <input type="file" name="announce_upload"><br><br>
                <input type="submit" name="add" value="Add" >
                
                
            </form>
        </div>
        <?php echo $announce_topicErr;?>
    </body>
</html>
