<?php
class InfoController extends AppController {

    
    public function index() {
        $this->comoFunciona();
    }
    
    public function comoFunciona() {
        $this->redirect("/pages/construcao");
    }
    
    public function contato() {
        $this->redirect("/pages/construcao");
    }
    
    public function duvidas() {
        $this->redirect("/pages/construcao");
    }
    
    
        
        
   
    
}