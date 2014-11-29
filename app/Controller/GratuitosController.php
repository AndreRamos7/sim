<?php


class GratuitosController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Gratuitos";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        if($this->data){
            if ($this->Gratuito->save($this->data)) {
                $this->Session->setFlash('Recipe Saved!');                
            }
        }
    }
}
