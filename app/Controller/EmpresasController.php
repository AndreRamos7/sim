<?php


class EmpresasController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Empresas";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        if($this->data){
            if ($this->Empresa->save($this->data)) {
                $this->Session->setFlash('Recipe Saved!');                
            }
        }
    }
}
