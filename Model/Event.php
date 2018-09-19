<?php
namespace Model;

class Event
{   public $eventID;
    public $venue;
    public $eventtype;
    public $startdate;
    public $enddate;

    public function __construct($eventID,$vanue,$eventType,$startdate,$enddate)
    {
        $this->venue=$vanue;
        $this->eventtype=$eventType;
        $this->startdate=$startdate;
        $this->enddate=$enddate;
        $this->eventID=$eventID;
    }
}

