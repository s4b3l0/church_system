<?php
namespace Model;
include 'Model/connectme.php';
include_once 'Model/Event.php';
class EventModel
{   public $eventArray;

public function getEvent($eventID, $vanue, $eventType, $startdate, $enddate)
    {
         $sql = "SELECT  event_id,event_vanue,event_type,event_date,event_lastDay
                FROM tblevent ";
       $qry = mysql_query($sql);
       while ($row = mysql_fetch_array($sql))
       {
           $eventID = $row['event_id'];
           $vanue = $row['event_vanue'];
           $eventType = $row['event_type'];
           $startdate = $row['event_date'];
           $enddate = $row['event_lastDay'];
           
        $this->eventArray = new Event($eventID, $vanue, $eventType, $startdate, $enddate);
           
       }
       
       
    }
    public function setEvent()
    {
        $eventID='';
        $vanue='';
        $eventType='';
        $startdate='';
        $enddate='';
        
        $this->getEvent($eventID, $vanue, $eventType, $startdate, $enddate);
        return $this->eventArray;
        
        
    }
    
}
