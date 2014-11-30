<?php
class ErrorController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Error";

    public function index(){
        $this->layout = "layoutErro";
    }
}

