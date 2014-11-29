<?php


class ComumsController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Comums";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        if($this->data){
            if ($this->Comum->save($this->data)) {
                $this->Session->setFlash('Recipe Saved!');                
            }
        }
    }
}

