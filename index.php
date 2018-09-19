<?php  error_reporting(0);
require_once 'Model/connectme.php';

if(isset($_GET['controller'])&& isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else{
    $controller = 'Login';
    $action = 'login';
}
require 'template.php';
//$rank = $_SESSION['rank'];

//include 'template/navigation.php';

//require 'template/content_area.php';
require_once('rout_router.php');
//require 'template.php';
require 'template/footer.php';
