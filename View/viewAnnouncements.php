<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>View announcements</title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    </head>
    <body>
        <div id="wrapper">
            
            <h2><u>Announcements</u></h2>
            <form>
                <input type=hidden name=controller value='announcements'>
                <input type=hidden name=action value='viewAnnouncements'>
                
                <table border ="1" class="responstable">
                    <tbody>
                        <tr>
                    <th>Topic</th>
                    <th>Announcement</th>
                    <th>Announcement Date</th>
                        </tr>
                </tbody>
                <?php
                    foreach ($announcement as $announcement)
                    {
                        echo '<tr>
                                <td>'.$announcement->announce_topic.'</td>
                                    <td>'.$announcement->announcement.'</td>
                                        <td>'.$announcement->announce_date.'</td>
                              </tr>';
                    }
                ?>
                </table>
            </form>
        </div>
    </body>
</html>
