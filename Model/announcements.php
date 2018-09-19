<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of announcements
 *
 * @author Student
 */
class announcements {
    public $announce_topic;
    public $announcement;
    public $announce_date;
    public $announce_upload;
    
    public $likes;
    public $announce_id;
    
    function __construct($announce_topic, $announcement, $announce_date, $announce_upload, $likes,$announce_id) {
        $this->announce_id = $announce_id;
        $this->announcement = $announcement;
        $this->announce_date = $announce_date;
        $this->announce_upload = $announce_upload;
        $this->announce_topic = $announce_topic;
        $this->likes = $likes;
    }

}
