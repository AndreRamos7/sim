<?php
class ComumsController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Comums";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
        $numArgs = func_num_args();
        $cidades = array("Castanhal", "Ananindeua", "SantaIsabel");
        
        if ($numArgs > 0) {
            $cidade = func_get_arg(0); 
            //echo "Cidade: $cidade";
            if($cidade == "Castanhal" or $cidade == "Ananindeua" or $cidade == "SantaIsabel"){ 
                //$cidade = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                $this->set('cidade', $cidade);            
            }else{
                $this->redirect("/Error");
            }
        }else{
            $this->redirect("/Error");
        }
        if($this->request->data){
            if ($this->Comum->save($this->request->data)) {
                
                $todosComuns = $this->Comum->query("SELECT "
                        . "`nome`, `emissor`, `rg`, `cpf`, `sexo`, `email`, `cep`, `estado`, `cidade`"
                        . ", `bairro`, `endereco`, `site`, `celular`, `fax`, `nomeMae`, `telefone` "
                        . "FROM `comums` WHERE cidade = '$cidadeSPC'");

                $paraGravar = array("CadastroSim$cidade" => array("Comuns" => $todosComuns));
                $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                $xml->save("$path/sim/app/DATAXML/$cidadeSPC/comuns.xml");                
                
                $this->Session->setFlash('Seu cadastro foi realizado com sucesso!!', 'flash_custom');

                $this->redirect("/$cidade");
            }else{
                $this->Session->setFlash('Não foi possivel salvar seu cadastro!!', 'flash_custom');                
                $this->redirect("/castanhal");
            }
        }
    }
}

