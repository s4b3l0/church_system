<?php
require_once 'Model/announcements.php';
require_once 'Model/connectme.php';
class announceModel {
    public $announceArray;
    public function makeAnnouncement($announcement,$announce_upload,$announce_topic,$username)
    {
        $sql = "insert into announcements(announcement, announce_date,announce_upload,announce_topic, member_id) values('$announcement', date(now()),
                '$announce_upload','$announce_topic' ,(select member_id from tblmember where member_username = '$username'))";
       echo $sql;
        $qry = mysql_query($sql) or die(mysql_error());
        exec($qry);
    }
    
    public function viewAnnouncement()
    {
        $sql = "select announce_topic, announcement, announce_date from announcements
                    order by announce_date desc";
        
        $result = mysql_query($sql) or die(mysql_error());
        echo $sql;
        $count = 0;
        while ($row = mysql_fetch_array($result))
        {
            $announce_topic = $row['announce_topic'];
            $announcement = $row['announcement'];
            $announce_date = $row['announce_date'];
            
            $this->announceArray[$count] = new announcements($announce_topic, $announcement, $announce_date);
            $count++;
        }
        
        return $this->announceArray;
    }
}
