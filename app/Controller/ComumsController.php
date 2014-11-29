<?php
class ComumsController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Comums";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $numArgs = func_num_args();
        $cidades = array("Castanhal", "Ananindeua", "SantaIsabel");
        
        if ($numArgs > 0) {
            $cidade = func_get_arg(0); 
            echo "Cidade: $cidade";
            if(true){ 
                //$cidade = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                $this->set('cidade', $cidade);            
            }else{
                //$this->redirect("/Error");
            }
        }
        if($this->data){
            if ($this->Comum->save($this->data)) {
                $todosComuns = $this->Comum->query("SELECT "
                        . "`nome`, `emissor`, `rg`, `cpf`, `sexo`, `email`, `cep`, `estado`, `cidade`"
                        . ", `bairro`, `endereco`, `site`, `celular`, `fax`, `nomeMae`, `telefone` "
                        . "FROM `comums`");
                
                $paraGravar = array('CadastroSimCastanhal' => array("Comuns" => $todosComuns));
                $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                $xml->save("C:/wamp/www/sim/app/DATAXMLcastanhal/comuns.xml");                
                $this->Session->setFlash('Seu cadastro foi realizado com sucesso!!', 'flash_custom');
                //$this->set('mensagem', "Salvo com sucesso!!");
                $this->redirect("/castanhal");
            }
        }
    }
}

