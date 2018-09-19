<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pages_Control
 *
 * @author Sabelo
 */
class PagesControl {
    
      public function home() {
      require_once('View/pages/home.php');
    }
    
     public function error() {
      require_once('View/pages/error.php');
    }
    
    public function loginError()
    {
        require_once 'view/pages/loginError.php';
    }
    
    public function databaseError()
    {
        require_once 'view/pages/databaseError.php';
    }
      
}
