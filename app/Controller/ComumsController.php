<?php 
App::uses('XML2Array', 'Controller');
App::uses('Util', 'app/Lib');


class ComumsController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Comums";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
        
        if ($this->request->is('post')) {
            if ($this->Comum->save($this->request->data)) {
                
                //código para gerar protocolo de cadastro
                
                
                $newId = $this->Comum->id;
                $cidade = $this->request->data['Comum']['cidade'];
                $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                $protocolo = rand(11111, 99999) . "-$newId";//echo "Protocolo: $protocolo";
                //echo $cidadeSPC;
                if($this->Comum->saveField('protocolo', $protocolo)){

                    //código para gerar arquivo XML
                    $todosComuns = $this->Comum->query("SELECT "
                            . "`protocolo`, `nome`, `emissor`, `rg`, `cpf`, `sexo`, `email`, `cep`, `estado`, `cidade`"
                            . ", `bairro`, `endereco`, `site`, `celular`, `fax`, `nomeMae`, `telefone` "
                            . "FROM `comums` WHERE cidade = '$cidade'");                    
                    $paraGravar = array("CadastroSim$cidadeSPC" => array("comum" => $todosComuns));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidade/comuns.xml"); 
                    
                    $dados["result"] = "Usuário cadastrado com sucesso";
                    $dados["protocolo"] = $protocolo;
                    $this->set('dados', $dados);
                   
                    $this->Session->setFlash("Documentos necessários (Cópia e Original): CPF, RG e comprovante de residência. Necessário também uma foto 3x4.  ", "flash_custom");
                    
                
                }else{
                    $dados["result"] = "Não foi possível cadastrar você!!";                    
                    $this->set('dados', $dados);  
                    $this->Session->setFlash('Erro! Protocolo de cadastro não pode ser gerado!', 'flash_custom');
                }
            }else{                
                $dados["result"] = "Não foi possível cadastrar você!!";                    
                $this->set('dados', $dados);  
                $this->Session->setFlash('Não foi possivel salvar seu cadastro!!', 'flash_custom');                
               
            }
        }                     
       
    }
    
    public function cadastro() {
        $numArgs = func_num_args();        
        if ($numArgs > 0) {
            $cidade = func_get_arg(0);         
            if($cidade == "Castanhal" or $cidade == "Ananindeua" or $cidade == "SantaIsabel"){         
                $this->set('cidade', $cidade);            
            }else{
                $this->redirect("/Error");
            }
        }else{
            $this->redirect("/Error");
        }
    }
}

