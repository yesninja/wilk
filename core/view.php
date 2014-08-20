<?php
class View
{
 
    public function __construct() {

    }
     
    public function output(){
        include(TEMPLATE_PATH . "/template/index.php");
    }
}