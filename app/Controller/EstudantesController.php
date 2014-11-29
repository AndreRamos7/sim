<?php


class EstudantesController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Estudantes";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        if($this->data){
            if ($this->Estudante->save($this->data)) {
                $this->Session->setFlash('Recipe Saved!');                
            }
        }
    }
}
