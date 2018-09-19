<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sermon
 *
 * @author Sabelo
 */
class Sermon {
 public  $sermonID;
   public $sermTitle;
    
    Public function  __construct($sermonID, $sermTitle) {
        $this->sermonID = $sermonID;
        $this->sermTitle = $sermTitle;
    }

}

